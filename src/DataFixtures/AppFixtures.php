<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//        UserFactor::createOne(['email' => 'abraca_admin@example.com']);
//        UserFactory::createMany(10);
    }
}
