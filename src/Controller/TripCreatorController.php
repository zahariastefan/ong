<?php

namespace App\Controller;

use App\Repository\CitiesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TripCreatorController extends AbstractController
{

    /**
     * @Route("/create-trip", name="app_trip_create")
     */
    public function createTrip(Request $request)
    {
        $jsonGet = $request->query->get('location_name');
        return $this->render('trip/trip-create.html.twig', [
            'location_name' => $jsonGet
        ]);
    }

    /**
     * @Route("/locations", name="app_locations")
     */
    public function getLocation(CitiesRepository $repository, EntityManagerInterface $entityManager)
    {
        $locations = $repository->findAll();
        $arrayLocations = [];
        foreach ($locations as $location)
        {
            $elements = [];
            $elements['id']=$location->getId();
            $elements['city']=$location->getCity();
            $elements['country']=$location->getCountry();
            $elements['latitude']=$location->getLatitude();
            $elements['altitude']=$location->getAltitude();
            $arrayLocations[] = $elements;
        }
        return new JsonResponse($arrayLocations);
    }
}