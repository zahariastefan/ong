<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PostCreatorController extends AbstractController
{
    /**
     * @Route("/create-post",name="app_post_create")
     */
    public function postCreate()
    {
        return $this->render('create_post.html.twig');
    }
}