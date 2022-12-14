<?php

namespace App\DataFixtures;

use App\Entity\Activities;
use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Tag;
use App\Factory\ActivitiesFactory;
use App\Factory\AnswerFactory;
use App\Factory\CitiesFactory;
use App\Factory\QuestionFactory;
use App\Factory\QuestionTagFactory;
use App\Factory\TagFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        ActivitiesFactory::createMany(40);

        CitiesFactory::createMany(20, function() {
            return [
                'activities' => ActivitiesFactory::randomRange(5, 10)
            ];
        });

        UserFactory::createOne([
            'email' => 'abraca_admin@example.com',
            'roles' => ['ROLE_ADMIN',
                'ROLE_USER'] //first time run for have admin access
        ]);

        UserFactory::createMany(10);

        TagFactory::createMany(100);

        $questions = QuestionFactory::createMany(20, function (){
            return [
                'owner' => UserFactory::random(),
            ];
        });

        QuestionTagFactory::createMany(100, function() {
            return [
                'tag' => TagFactory::random(),
                'question' => QuestionFactory::random(),
            ];
        });

        QuestionFactory::new()
            ->unpublished()
            ->many(5)
            ->create()
        ;

        AnswerFactory::createMany(100, function() use ($questions) {
            return [
                'question' => $questions[array_rand($questions)]
            ];
        });
        AnswerFactory::new(function() use ($questions) {
            return [
                'question' => $questions[array_rand($questions)]
            ];
        })->needsApproval()->many(20)->create();


//        CitiesFactory::createMany(20);
//
//
//        $city = CitiesFactory::createOne();
//
//        $activity = new Activities();
//        $activity->setActivity('Basket');
//
//        $activity2 = new Activities();
//        $activity2->setActivity('Football');
//
//        $city->addActivity($activity);
//        $city->addActivity($activity2);
//
//        $manager->persist($activity);
//        $manager->persist($activity2);


        $manager->flush();
    }
}
