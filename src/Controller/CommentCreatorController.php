<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentCreatorController extends AbstractController
{
    /**
     * @Route("/create-comment", name="app_comment_create")
     */
    public function commentCreate()
    {
        return $this->render('comment_create.html.twig');
    }
}