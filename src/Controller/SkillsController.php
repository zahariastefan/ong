<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/skills-list",name="app_skills_page")
     */
    public function skillsPage()
    {
        return $this->render('skills_list.html.twig');
    }
}