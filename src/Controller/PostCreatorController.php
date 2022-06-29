<?php

namespace App\Controller;

use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PostCreatorController extends AbstractController
{

    /**
     * @Route("/create-post", name="app_post_create")
     */
    public function loadPost()
    {
        return $this->render('create_post.html.twig');
    }

    /**
     * @Route("/load-post", name="app_load_post")
     */
    public function postCreate(Request $request, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();
        $submitted = $request->query->get('submitted');
        if(isset($submitted)){
//            dd($submitted);
            $title = $request->request->get('post_title');
//            dd($title);
            $content = $request->request->get('content_field');
            $slug = $request->request->get('slug_post');
            $time = new \DateTime($request->get('time'));
//        dd($time);
            $question = new Question();
            $question->setOwner($this->getUser());
            $question->setCreatedAt($time);

            $question->setName($title);//title
            $question->setSlug($slug);
            $question->setQuestion($content);//content
        $question->setAskedAt($time);
        $question->setUpdatedAt($time); //for now ask and update are the same! this will be change in Edit Post
            $entityManager->persist($question);
            $entityManager->flush();
        }
        return new Response();
    }
}