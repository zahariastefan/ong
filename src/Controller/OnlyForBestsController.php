<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OnlyForBestsController extends AbstractController
{
    /**
     * @Route("/boss")
     * @IsGranted("ROLE_USER")
     */
    public function new(): Response
    {
        return new Response('Sounds like a GREAT feature for V2!');
    }
}