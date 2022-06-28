<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\UserVotes;
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserVotesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    private $logger;
    private $isDebug;

    public function __construct(LoggerInterface $logger, bool $isDebug)
    {
        $this->logger = $logger;
        $this->isDebug = $isDebug;
    }


    /**
     * @Route("/{page<\d+>}", name="app_homepage")
     */
    public function homepage(QuestionRepository $repository, int $page = 1)
    {
        $queryBuilder = $repository->createAskedOrderedByNewestQueryBuilder();

        $pagerfanta = new Pagerfanta(new QueryAdapter($queryBuilder));
        $pagerfanta->setMaxPerPage(5);
        $pagerfanta->setCurrentPage($page);

        return $this->render('question/homepage.html.twig', [
            'pager' => $pagerfanta,
        ]);
    }

    //here is the 3th way to deny access
    //     * @IsGranted("ROLE_ADMIN")
    //OR we can use as
    // todo => attribute => #[IsGranted("ROLE_ADMIN")] PHP 8.0
    // instead of
    // todo => annotation
    /**
     * @Route("/questions/new")
     * @IsGranted("ROLE_USER")
     */


    public function new()
    {
        // this is the first way to deny access
        // $this->denyAccessUnlessGranted('ROLE_USER');

        //the second way to deny access
        /* if (!$this->isGranted('ROLE_ADMIN')) {
             throw $this->createAccessDeniedException('No access for you!'); //this message is seen only by developers
         } */
        return new Response('Sounds like a GREAT feature for V2!');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show(Question $question, UserVotesRepository $repository)
    {
        $objUserVotes = new UserVotes();
        $user = $this->getUser();
        if($user) {
            $userId = $user->getId();
            $postId = $question->getId();
            $objUserVotesCurrent = $repository->findBy([
                'user_id' => $userId,
                'target_id' => $postId
            ]);
            if($objUserVotesCurrent != null && $objUserVotesCurrent != ''){
                $vote = $objUserVotesCurrent[0]->getVote();
            }else{
                $vote = 0;
            }
        }else{
            $vote = 0;
        }




        if ($this->isDebug) {
            $this->logger->info('We are in debug mode!');
        }

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'votes' => $vote
        ]);
    }

    /**
     * @Route("/questions/edit/{slug}", name="app_question_edit")
     */
    public function edit(Question $question)
    {
        $this->denyAccessUnlessGranted('EDIT', $question);

        return $this->render('question/edit.html.twig', [
            'question' => $question,
        ]);
    }


    /**
     * @Route("/questions/{slug}/vote", name="app_question_vote", methods="POST")
     * @IsGranted("ROLE_USER")
     */
    public function questionVote(UserVotesRepository $repository, Question $question, Request $request, EntityManagerInterface $entityManager)
    {
        $objUserVotes = new UserVotes();

        $user = $this->getUser();
        $userId = $user->getId();
        $postId = $_GET['question_id'];

        $objUserVotesCurrent = $repository->findBy([
            'user_id' => $userId,
            'target_id' => $postId
        ]);

        $direction = $request->request->get('direction');

        if($objUserVotesCurrent != null){//if already exist a record of this user id in User Votes
            //check if user_id and target_id exist on same row based on id
                $vote = $objUserVotesCurrent[0]->getVote();
            switch (intval($vote)){
                case -1:
                    if ($direction === 'up') {
                        $question->upVote();
                        $objUserVotesCurrent[0]->setVote(intval(1));
                    } else {
                        $question->upVote();
                        $objUserVotesCurrent[0]->setVote(0);
                    }
                    break;
                case 0:
                    if ($direction === 'up') {
                        $question->upVote();
                        $objUserVotesCurrent[0]->setVote(1);
                    } else {
                        $question->downVote();
                        $objUserVotesCurrent[0]->setVote(-1);
                    }
                    break;
                case 1:
                    if ($direction === 'up') {
                        $question->downVote();
                        $objUserVotesCurrent[0]->setVote(0);
                    } else {
//                        dd($direction);
                        $question->downVote();
                        $objUserVotesCurrent[0]->setVote(-1);
                    }
                    break;
            }
            $entityManager->persist($objUserVotesCurrent[0]);

        }else{
            ($direction === 'up') ? $firstVote = 1 : $firstVote = -1;
            $objUserVotes->setVote($firstVote);
            $objUserVotes->setTargetId($postId);
            $objUserVotes->setUserId($userId);
            $entityManager->persist($objUserVotes);
        }


        $entityManager->flush();

        return $this->redirectToRoute('app_question_show', [
            'slug' => $question->getSlug()
        ]);
    }
}
