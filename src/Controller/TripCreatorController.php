<?php

namespace App\Controller;

use App\Entity\Activities;
use App\Entity\Cities;
use App\Repository\ActivitiesRepository;
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
    public function createTrip(Request $request, CitiesRepository $citiesRepository)
    {

        return $this->render('trip/trip-create.html.twig');
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

    /**
     * @Route("/activities}", name="app_activities")
     */
    public function getActivities(CitiesRepository $citiesRepository, Request $request)
    {
        $jsonLocation = $request->request->get('jsonLocation');
        $cityName = json_decode($jsonLocation)->city;
        $countryName = json_decode($jsonLocation)->country;
        $getCityObject = $citiesRepository->findBy([
            'city' => $cityName,
            'country' => $countryName
        ]);
        $getActivitiesByCity = $getCityObject[0]->getActivities()->toArray();
        $formattedData = [];
        foreach ($getActivitiesByCity as $singleActivity){
            $elements = [];
            $elements['id'] = $singleActivity->getId();
            $elements['activity'] = $singleActivity->getActivity();
            $elements['altitude'] = ($singleActivity->getCity()->toArray())[0]->getAltitude();
            $elements['latitude'] = ($singleActivity->getCity()->toArray())[0]->getLatitude();
            $elements['price'] = $singleActivity->getPrice();
            $formattedData[]=$elements;
        }
        return new JsonResponse($formattedData);
    }
}