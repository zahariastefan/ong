<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\TotalVotes;
use App\Entity\UserVotes;
use App\Entity\UserVotesAnswers;
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\TotalVotesRepository;
use App\Repository\UserVotesAnswersRepository;
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
public function homepage(Request $request, QuestionRepository $repository, int $page = 1,EntityManagerInterface $entityManager)
    {

//        dd($request->query->get('search_term'));

        $queryBuilder = $repository->findAllAskedOrderedByNewest(
            $request->query->get('search_term')
        );
//        dd($queryBuilder->getQuery()->getResult());
        $pagerfanta = new Pagerfanta(
            new QueryAdapter($queryBuilder
            ));
        $pagerfanta->setMaxPerPage(6);
        $pagerfanta->setCurrentPage($page);

        $alertDisabled2fa = $request->query->get('alertDisabled2fa');
        if(!isset($alertDisabled2fa)) $alertDisabled2fa =  false;

        return $this->render('question/homepage.html.twig', [
            'pager' => $pagerfanta,
//            'posts' => $queryBuilder,
            'alertDisabled2fa' =>$alertDisabled2fa
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
    public function show($slug,
                         Question $question,
                         QuestionRepository $questionRepository,
                         UserVotesRepository $userVotesRepository,
                         UserVotesAnswersRepository $userVotesAnswersRepository,
                         EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();
        $postId = $question->getId();

        if(!empty($user)) {//if logged in
            $userId = $user->getId();
            $checkIfLogged=1;
            //user votes questions
            $objUserVotesCurrent = $userVotesRepository->findBy([ //UserVotes Table
                'user_id' => $userId,
                'target_id' => $postId
            ]);
            //user votes answers
            $objUserVotesAnswerCurrent = $userVotesAnswersRepository->findBy([
                'user_id' => $userId,
                'target_id' => $postId
            ]);

            if(!empty($objUserVotesCurrent)){
                $vote = $objUserVotesCurrent[0]->getVote();
                $like = $objUserVotesCurrent[0]->getLikeNr();
                $unLike = $objUserVotesCurrent[0]->getUnlikeNr();
            }else{
                $vote = 0;
                $like =0;
                $unLike =0;
            }

            if(!empty($objUserVotesAnswerCurrent)){
                $voteA = $objUserVotesAnswerCurrent[0]->getVote();
                $likeA = $objUserVotesAnswerCurrent[0]->getLikeNr();
                $unLikeA = $objUserVotesAnswerCurrent[0]->getUnlikeNr();
            }else{
                $voteA = 0;
                $likeA =0;
                $unLikeA =0;
            }

            $answers = $question->getAnswers()->toArray();

            foreach($answers as $answer){
                $id = $answer->getId();
                $getVotes = $userVotesAnswersRepository->findBy([
                    'target_id' => $id,
                    'user_id' => $user->getId()
                ]);


                if(!empty($getVotes)){
                    $answer->vote = $getVotes[0]->getVote();
                    (!empty($getVotes[0]->getLikeNr())) ? $likeNr = $getVotes[0]->getLikeNr() : $likeNr = 0;
                    (!empty($getVotes[0]->getUnlikeNr())) ? $unlikeNr = $getVotes[0]->getUnlikeNr() : $unlikeNr = 0;
                    $answer->likeNrByUser = $likeNr;
                    $answer->unlikeNrByUser = $unlikeNr;

                }else{
                    $answer->vote = 0;
                    $answer->likeNrByUser = 0;
                    $answer->unlikeNrByUser = 0;
                }
            }

        }
        else{
            $vote = 0;
            $checkIfLogged=0;
            $like =0;
            $unLike =0;
            $voteA=0;
            $likeA=0;
            $unLikeA=0;
        }

        if ($this->isDebug) {
            $this->logger->info('We are in debug mode!');
        }



        return $this->render('question/show.html.twig', [
            'question' => $question,
            'votes' => $vote,
            'likes' => $like,
            'unlikes'=> $unLike,
            'votesA' => $voteA,
            'likesA' =>$likeA ,
            'unlikesA'=> $unLikeA,
            'checkIfLogged' =>$checkIfLogged,
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
     * @Route("/answer/{answerId}/vote", name="app_answer_vote", methods="POST")
     */
    public function answerVote($answerId,
                               AnswerRepository $answerRepository,
                               Request $request,
                               EntityManagerInterface $entityManager,
                               UserVotesAnswersRepository $userVotesAnswersRepository)
    {
        $user = $this->getUser();

        if(empty($user))  header("Location: http://www.example.com/another-page.php");
        $direction = $_POST['direction'];
        $objUserVotesAnswers = new UserVotesAnswers();
        $answerById = $answerRepository->findBy(
            [
                'id' => $answerId
            ]
        );

        $totalLikes = $answerById[0]->getLikeNr();
        $totalUnlikes = $answerById[0]->getUnlikeNr();

        $userId = $user->getId();

        $objUserVotesAnswersCurrent = $userVotesAnswersRepository->findBy([
            'user_id' => $userId,
            'target_id' => $answerId,
        ]);



        if(!empty($objUserVotesAnswersCurrent)){//if this exist mean that a record is already MADE in DB
            $like = $objUserVotesAnswersCurrent[0]->getLikeNr();
            $unlike = $objUserVotesAnswersCurrent[0]->getUnlikeNr();


            if(!$like && !$unlike){ // remove the possibility to have a record without like or unlike
                if($direction === 'up') {
                    $objUserVotesAnswersCurrent[0]->setLikeNr(1);
                    if($totalLikes > 0){// we change also Question Table -> unlike_nr
                        $answerById[0]->setlikeNr(intval($totalLikes) + 1);
                    }else if($totalLikes == 0 || $totalLikes == null){
                        $answerById[0]->setLikeNr(1);
                    }
                }else {
                    $objUserVotesAnswersCurrent[0]->setUnlikeNr(1);
                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $answerById[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                    }else if($totalUnlikes == 0 || $totalUnlikes == null) {
                        $answerById[0]->setUnlikeNr(1);
                    }
                }
                $objUserVotesAnswersCurrent[0]->setVote(1);
            }
            if($like == 1){// exist 1 like UV
                if($direction === 'up') {// am apasat UP => scoate 1 like
                    $objUserVotesAnswersCurrent[0]->setLikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setUnlikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setVote(0);

                    if($totalLikes > 0){ //scoatem 1 si din Questions de la like_nr
                        $answerById[0]->setLikeNr(intval($totalLikes) - 1);
                    }
                }else{//am apasat DOWN
                    $objUserVotesAnswersCurrent[0]->setLikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setUnlikeNr(1);
                    $objUserVotesAnswersCurrent[0]->setVote(1);

                    if($totalLikes > 0){ //scoatem 1 si din Questions de la like_nr
                        $answerById[0]->setLikeNr(intval($totalLikes) - 1);
                        if($totalUnlikes >= 0) {
                            $answerById[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                        }
                    }
                }
            }
            if($unlike == 1){//exista 1 unlike in UV
                if($direction === 'down') { //scoatem 1 unlike
                    $objUserVotesAnswersCurrent[0]->setUnlikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setLikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setVote(0);

                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $answerById[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                    }
                }else{
                    $objUserVotesAnswersCurrent[0]->setUnlikeNr(null);
                    $objUserVotesAnswersCurrent[0]->setLikeNr(1);
                    $objUserVotesAnswersCurrent[0]->setVote(1);

                    if($totalUnlikes >= 0){//scoatem si din Question unlike_nr
                        $answerById[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                        if($totalLikes >= 0) {
                            $answerById[0]->setLikeNr(intval($totalLikes) + 1);
                        }
                    }
                }
            }

            $entityManager->persist($objUserVotesAnswersCurrent[0]);

        }
        else{
            if($direction === 'up') {
                $objUserVotesAnswers->setLikeNr(1);
                if($totalLikes >= 0){ //scoatem 1 si din Questions de la like_nr
                    $answerById[0]->setLikeNr(intval($totalLikes) + 1);
                }
            }
            else{
                $objUserVotesAnswers->setUnlikeNr(1);
                if($totalUnlikes >= 0){ //scoatem 1 si din Questions de la like_nr
                    $answerById[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                }

            }
            $objUserVotesAnswers->setVote(1);
            $objUserVotesAnswers->setTargetId($answerId);
            $objUserVotesAnswers->setUserId($userId);
            $objUserVotesAnswers->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($objUserVotesAnswers);
        }
        $entityManager->flush();

        return new Response();
    }



    /**
     * @Route("/questions/{slug}/vote", name="app_question_vote", methods="POST")
     */
    public function questionVote(UserVotesRepository $repository, Question $question, QuestionRepository $questionRepository, Request $request, EntityManagerInterface $entityManager, $slug)
    {
        $user = $this->getUser();
        $direction = $_POST['direction'];
        $objUserVotes = new UserVotes();
        $questionBySlug = $questionRepository->findBy([
            'slug' => $slug
        ]);

        $totalLikes = $questionBySlug[0]->getLikeNr();
        $totalUnlikes = $questionBySlug[0]->getUnlikeNr();

        $userId = $user->getId();
        $postId = $_GET['question_id'];

        $objUserVotesCurrent = $repository->findBy([
            'user_id' => $userId,
            'target_id' => $postId,
        ]);

        if(!empty($objUserVotesCurrent)){//now one of two SURELY exist
            $like = $objUserVotesCurrent[0]->getLikeNr();
            $unlike = $objUserVotesCurrent[0]->getUnlikeNr();


            if(!$like && !$unlike){ // remove the possibility to have a record without like or unlike
                if($direction === 'up') {
                    $objUserVotesCurrent[0]->setLikeNr(1);
                    if($totalLikes > 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setlikeNr(intval($totalLikes) + 1);
                    }else if($totalLikes == 0 || $totalLikes == null){
                        $questionBySlug[0]->setLikeNr(1);
                    }
                }else {
                    $objUserVotesCurrent[0]->setUnlikeNr(1);
                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                    }else if($totalUnlikes == 0 || $totalUnlikes == null) {
                        $questionBySlug[0]->setUnlikeNr(1);
                    }
                }
                $objUserVotesCurrent[0]->setVote(1);
            }
            if($like == 1){// exist 1 like UV
                if($direction === 'up') {// am apasat UP => scoate 1 like
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setVote(0);

                    if($totalLikes > 0){ //scoatem 1 si din Questions de la like_nr
                        $questionBySlug[0]->setLikeNr(intval($totalLikes) - 1);
                    }
                }else{//am apasat DOWN
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setUnlikeNr(1);
                    $objUserVotesCurrent[0]->setVote(1);

                    if($totalLikes > 0){ //scoatem 1 si din Questions de la like_nr
                        $questionBySlug[0]->setLikeNr(intval($totalLikes) - 1);
                        if($totalUnlikes >= 0) {
                            $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                        }
                    }
                }
            }
            if($unlike == 1){//exista 1 unlike in UV
                if($direction === 'down') { //scoatem 1 unlike
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setLikeNr(null);
                    $objUserVotesCurrent[0]->setVote(0);

                    if($totalUnlikes > 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                    }
                }else{
                    $objUserVotesCurrent[0]->setUnlikeNr(null);
                    $objUserVotesCurrent[0]->setLikeNr(1);
                    $objUserVotesCurrent[0]->setVote(1);

                    if($totalUnlikes >= 0){//scoatem si din Question unlike_nr
                        $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) - 1);
                        if($totalLikes >= 0) {
                            $questionBySlug[0]->setLikeNr(intval($totalLikes) + 1);
                        }
                    }
                }
            }

            $entityManager->persist($objUserVotesCurrent[0]);

        }else{
            if($direction === 'up') {
                $objUserVotes->setLikeNr(1);
                if($totalLikes >= 0){ //scoatem 1 si din Questions de la like_nr
                    $questionBySlug[0]->setLikeNr(intval($totalLikes) + 1);
                }
            }else{
                $objUserVotes->setUnlikeNr(1);
                if($totalUnlikes >= 0){ //scoatem 1 si din Questions de la like_nr
                    $questionBySlug[0]->setUnlikeNr(intval($totalUnlikes) + 1);
                }

            }
            $objUserVotes->setVote(1);
            $objUserVotes->setTargetId($postId);
            $objUserVotes->setUserId($userId);



            $entityManager->persist($objUserVotes);
        }

        $entityManager->flush();

        return new Response();
    }
}
