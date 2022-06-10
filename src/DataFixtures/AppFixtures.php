<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'email' => 'abraca_admin@example.com',
            'roles' => ['ROLE_ADMIN'] //first time run for have admin access
        ]);

        UserFactory::createOne([
            'email' => 'abraca_user@example.com',//second time run for have user access
        ]);
        UserFactory::createMany(10);
    }
}
