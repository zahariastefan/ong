<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\TotalVotes;
use App\Entity\UserVotes;
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\TotalVotesRepository;
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
    public function show($slug, Question $question, UserVotesRepository $repository)
    {
        $objUserVotes = new UserVotes();
        $user = $this->getUser();

//        $totalLikes = $questionBySlug[0]->getLikeNr();
//        $totalUnlikes = $questionBySlug[0]->getUnlikeNr();

//        ($totalLikes > 0) ? $totalLikes : $totalLikes = 0;
//        ($totalUnlikes > 0) ? $totalUnlikes : $totalUnlikes = 0;


        if($user) {
            $userId = $user->getId();
            $postId = $question->getId();
            $objUserVotesCurrent = $repository->findBy([
                'user_id' => $userId,
                'target_id' => $postId
            ]);
            if($objUserVotesCurrent != null && $objUserVotesCurrent != ''){
                $vote = $objUserVotesCurrent[0]->getVote();
                $like = $objUserVotesCurrent[0]->getLikeNr();
                $unlike = $objUserVotesCurrent[0]->getUnlikeNr();
            }else{
                $vote = 0;
            }
        }else{
            $vote = 0;
        }

        if ($this->isDebug) {
            $this->logger->info('We are in debug mode!');
        }


        if(!$like) $like=0;
        if(!$unlike) $unlike=0;

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'votes' => $vote,
            'likes' => $like,
            'unlikes'=> $unlike
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
    public function questionVote(UserVotesRepository $repository, Question $question, QuestionRepository $questionRepository, Request $request, EntityManagerInterface $entityManager, $slug)
    {
        $direction = $_POST['direction'];
//        dd($direction);
        $objUserVotes = new UserVotes();
        $questionBySlug = $questionRepository->findBy([
            'slug' => $slug
        ]);

        $totalLikes = $questionBySlug[0]->getLikeNr();
        $totalUnlikes = $questionBySlug[0]->getUnlikeNr();

        $user = $this->getUser();
        $userId = $user->getId();
        $postId = $_GET['question_id'];

        $objUserVotesCurrent = $repository->findBy([
            'user_id' => $userId,
            'target_id' => $postId,
        ]);

//        $direction = $request->request->get('direction');

        if($objUserVotesCurrent != null){//now one of two SURELY exist
            $like = $objUserVotesCurrent[0]->getLikeNr();
            $unlike = $objUserVotesCurrent[0]->getUnlikeNr();
//            dd($like);
            if(!$like && !$unlike){ // remove the possibility to have a record without like or unlike
//                dd('nici de una nici de alta');
                if($direction === 'up') {
                    $objUserVotesCurrent[0]->setLikeNr(1);
//                    dd('up');
                }else {
                    $objUserVotesCurrent[0]->setUnlikeNr(1);
                }
                $objUserVotesCurrent[0]->setVote(1);
            }
            if($like == 1){// exist 1 like UV
//                dd('a intrat in like!');
//                dd('$direction');
                if($direction === 'up') {// am apasat UP => scoate 1 like
//                    dd('up aici');
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setVote(0);

                    /**TODO verify if is ok Question**/
                    if($totalLikes >0){ //scoatem 1 si din Questions de la like_nr
                        $questionBySlug[0]->setLikeNr(intval($totalLikes) - 1);
                    }
                }else{//am apasat DOWN
//                    dd('down');
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setUnlikeNr(1);
                    $objUserVotesCurrent[0]->setVote(1);

                    /**TODO verify Questions**/
                    if($totalLikes > 0){ //scoatem 1 si din Questions de la like_nr
                        $questionBySlug[0]->setLikeNr(intval($totalLikes) - 1);
                        if($totalUnlikes > 0) {
                            $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                        }
                    }
                }
            }
            if($unlike){//exista 1 unlike in UV
//                dd('a intrat in unlike!');

                if($direction === 'down') { //scoatem 1 unlike
//                    dd('down');
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setVote(0);

                    /**TODO verify Question**/
                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                    }
                }else{
//                    dd('up');
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setLikeNr(1);
                    $objUserVotesCurrent[0]->setVote(1);

                    /**TODO verify Question**/
                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                        if($totalLikes > 0) {
                            $questionBySlug[0]->setLikeNr(intval($totalLikes) + 1);
                        }
                    }
                }
            }
            //dd('nu a intrat');
            $entityManager->persist($objUserVotesCurrent[0]);

        }else{
            ($direction === 'up') ? $objUserVotes->setLikeNr(1) : $objUserVotes->setUnlikeNr(1);
            $objUserVotes->setVote(1);
            $objUserVotes->setTargetId($postId);
            $objUserVotes->setUserId($userId);
            $entityManager->persist($objUserVotes);
        }


        $entityManager->flush();

        return new Response();

//        return $this->redirectToRoute('app_question_show', [
//            'slug' => $question->getSlug()
//        ]);
    }
}
