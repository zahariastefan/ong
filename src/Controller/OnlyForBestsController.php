<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OnlyForBestsController extends AbstractController
{
    /**
     * @Route("/testapi")
     * @IsGranted("ROLE_USER")
     */
    public function new(): Response
    {
//
//        $ch = curl_init();
////        $execute = curl_exec($ch);
//        // set URL and other appropriate options
//        $options = array(CURLOPT_URL => 'http://stefan.localhost/api/cheeses/1',
//            CURLOPT_HEADER => false
//        );
//
//        $data = curl_setopt_array($ch, $options);
//
//// grab URL and pass it to the browser
//        $result = curl_exec($ch);
//
//// close cURL resource, and free up system resources
//        curl_close($ch);



        $url = 'http://stefan.localhost/api/cheeses/1';
        //  Initiate curl
        $ch = curl_init();
// Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
// Execute
        $result=curl_exec($ch);
// Closing
        curl_close($ch);


//        dd(json_decode($result));
        return $this->render('/test.html.twig');
    }
}