<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends BaseController
{
    /**
     * @Route("/api/me", name="app_user_api_me")
     * @IsGranted("IS_AUTHENTICATED_REMEMBERED")
     */
    public function apiMe()
    {
//        return $this->json($this->getUser());
//
        return $this->json($this->getUser(), 200, [], [
            'groups' => ['user:read']
        ]);
    }

    /**
     * @Route("/profile", name="user_dashboard")
     * @IsGranted("ROLE_USER")
     */
    public function profile(QuestionRepository $questionRepository)
    {
        $currentUserID = $this->getUser()->getId();
        $allPosts = $questionRepository->findAll();
//        dd();
        $ownedPosts = [];
        foreach($allPosts as $singlePost){
            $ownerId = $singlePost->getOwner()->getId();
            if($ownerId === $currentUserID){
                $ownedPosts[] = $singlePost;
            }
        }
        return $this->render('profile.html.twig', [
            'ownedPosts' => $ownedPosts
        ]);
    }

}