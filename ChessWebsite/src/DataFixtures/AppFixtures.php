<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'username' => 'Max',
            'password' => '01oWner99',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'Matt',
            'password' => 'Smith',
            'role' => 'ROLE_ADMIN'
        ]);

    }
}
