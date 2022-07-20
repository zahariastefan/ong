<?php

namespace App\Controller;

use App\Entity\Cauze;
use App\Entity\Products;
use App\Entity\UniqueCodes;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use PhpParser\Node\Expr\Cast\Object_;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage extends AbstractController
{

    //TODO --> everytime we access homepage that make API request from Stripe for product, that make all slow
    //TODO --> find a solution to check if exist changes on products, if yes make api request if not, use cookie or something else

//    /**
//     * @Route("/", name="app_homepage1")
//     */
//    public function homepage()
//    {
//        return $this->render("homepage1.html.twig");
//    }

    /**
     * @Route("/donations", name="app_donations")
     */
    public function donations(EntityManagerInterface $entityManager)
    {
        //connect API
        $stripe = new \Stripe\StripeClient(
            'sk_test_51L07e8JoD3aKcbAtG5HqC3HnNt3lCULigczbHG0vB84rby0eDtAp5u8nSEq8dfaNDj4uFzZjOgVUE8doDuRfFejX00um8jm5mu'
        );
        $allProd = $stripe->products->all();

        //all product data retrieve
        $products = $allProd->data;
        $arrProducts = []; //array of all product with desired info
        foreach ($products as $singleProduct) {

            $prodAvail=$singleProduct->active;
            if($prodAvail === true){ // only active products
                $priceObj = $stripe->prices->retrieve(
                    $singleProduct->default_price,
                    []
                );

                $price = $priceObj->unit_amount;
                $singleProduct->fPrice = $price;
                $arrProducts[] = $singleProduct; //price
            }
        }
//        dd($arrProducts);
        $repository = $entityManager->getRepository(Cauze::class); //fetch data from DB
        $data = $repository->findBy([],['date' => 'DESC']);
        return $this->render("donations.html.twig", [
            'dataCauze' => $data,
            'products' =>$arrProducts
        ]);//send data to templates for render
    }
    /**
     * @Route("/checkout", name="app_checkout")
     */
    public function payment(EntityManagerInterface $entityManager, Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51L07e8JoD3aKcbAtG5HqC3HnNt3lCULigczbHG0vB84rby0eDtAp5u8nSEq8dfaNDj4uFzZjOgVUE8doDuRfFejX00um8jm5mu');
        $stripe = new \Stripe\StripeClient(
            'sk_test_51L07e8JoD3aKcbAtG5HqC3HnNt3lCULigczbHG0vB84rby0eDtAp5u8nSEq8dfaNDj4uFzZjOgVUE8doDuRfFejX00um8jm5mu'
        );

       (isset($_SERVER['HTTPS'])) ? $http = 'http://' : $http = 'https://';

        $YOUR_DOMAIN = $http.$_SERVER['HTTP_HOST'];

//        $price = $_POST['price'];
        $price = $request->request->get('price'); //this is info from POST['price']
//        $quantity = $_POST['quantity'];
        $quantity = $request->request->get('quantity');//this is info from POST['qunatity']

        //retrieve price obj
        $priceObj = $stripe->prices->retrieve(
            $price,
            []
        );
        $prodID = $priceObj->product; //retrieve product from price obj


        $repository = $entityManager->getRepository(UniqueCodes::class); // all unique code from DB

        $unique = (bin2hex(openssl_random_pseudo_bytes(40))); //create a NEW unique
        $uniqueCode = $repository->findBy([
            'code' => $unique
        ]); //check if the new fresh unique code exist already on DB (low probability, but better to check)

        if(count($uniqueCode) > 0){//if exist in DB
            while(count($uniqueCode) > 0){ //while $uniqueCode return >0 that means that the code already exists so wil automatically create another one and check until this while become false
                $unique = (bin2hex(openssl_random_pseudo_bytes(40)));
                $uniqueCode = $repository->findBy([
                    'code' => $unique
                ]);
            }
        }

        if(count($uniqueCode) === 0){//if not exist in DB
                $uniqueORM = new UniqueCodes();
                $uniqueORM->setCode($unique);
                $entityManager->persist($uniqueORM);
                $entityManager->flush();
            }

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price' => $price,
                    'quantity' => $quantity,
                ],
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success?prod='.$prodID.'&unique='.$unique, //redirection if success
            'cancel_url' => $YOUR_DOMAIN . '/cancel' //redirection if fail
        ]);

        return $this->redirect($checkout_session->url);
//        return new Response();
    }
    /**
     * @Route("/success")
     */
    public function success(EntityManagerInterface $entityManager)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51L07e8JoD3aKcbAtG5HqC3HnNt3lCULigczbHG0vB84rby0eDtAp5u8nSEq8dfaNDj4uFzZjOgVUE8doDuRfFejX00um8jm5mu'
        );

        $prod = $_GET['prod']; //info from URL
        $unique = $_GET['unique']; //info from URL

        //retrieve product object
        $prodObj = $stripe->products->retrieve(
            $prod,
            []
        );
        $prodName = $prodObj->name; //product name

        //retrieve all sessions
        $allSessions = $stripe->checkout->sessions->all();
        $dataAllSessions = $allSessions->data; //all sessions data

        $currentSession = ''; //here will be the current SESSION
        foreach ($dataAllSessions as $singleSession) {
            if(str_contains($singleSession->success_url, $unique)){ //if success_url has our currently UNIQUE code that means that is our current session
                $currentSession = $singleSession;
            }
        }
        //retrieve payment intent
        $getPaymentIntention = $stripe->paymentIntents->retrieve(
            $currentSession->payment_intent,
            []
        );
        //retrieve date
        $date = date('Y-m-d H:i:s',$getPaymentIntention->created);
        //reformat date
        $dateIm = new \DateTimeImmutable($date);
        //from cents to USD
        $amount = intval($getPaymentIntention->amount)/100;

        //retrieve DB
        $repository = $entityManager->getRepository(Cauze::class);

        //check if our unique exist, that's another security check like we did in checkout page
        $checkExistance = $repository->findBy([
            'unique_id' => $unique
        ]);

        if(count($checkExistance) == 0){ //if not exist that's mean everything is ok so we add on DB the current success payment
            $cauza = new Cauze();
            $cauza->setName($prodName)
                ->setDate($dateIm)
                ->setAmount($amount)
                ->setUniqueId($unique)
                ->setProdId($prod)
                ->setCustomerId($currentSession->customer)
                ->setPaymentIntent($currentSession->payment_intent)
                ->setStatus($getPaymentIntention->status);

            $entityManager->persist($cauza);
            $entityManager->flush();
        }
        return $this->render("success.html.twig");
    }

    /**
     * @Route("/cancel")
     */
    public function cancel()
    {
        return $this->render("cancel.html.twig");
    }
}