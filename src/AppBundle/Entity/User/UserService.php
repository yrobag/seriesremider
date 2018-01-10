<?php

namespace AppBundle\Entity\User;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;


class UserService
{
    protected $em;


    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function createUser($data)
    {
        $user = new User();
        $hash = $this->_hashPassword($data['password']['first']);
        $user->setEmail($data['email'])->setHashedPassword($hash);

        $em = $this->em;

        $em->persist($user);
        $em->flush();
    }

    protected function _hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }






}