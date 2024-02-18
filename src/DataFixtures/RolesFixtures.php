<?php

namespace App\DataFixtures;

use App\Entity\Roles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RolesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $role = new Roles;
        $role->setName('ROLE_ADMIN');
        $manager->persist($role);

        $role = new Roles;
        $role->setName('ROLE_USER');
        $manager->persist($role);

        $manager->flush();
    }
}
