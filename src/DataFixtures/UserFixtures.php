<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        #  bin/console doctrine:fixtures:load

//        $user = new User();
//        $user->setUsername("kek");
//        $user->setPassword($this->encoder->encodePassword($user,'some_password')); // 12345678
//        $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
//        $manager->persist($user);
//
//        $manager->flush();
    }
}
