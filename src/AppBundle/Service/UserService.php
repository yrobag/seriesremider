<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



class UserService implements ContainerAwareInterface
{


    protected $_em;

    private $_container;


    public function __construct(
        EntityManagerInterface $em,
        ContainerInterface $container
    )
    {
        $this->_em = $em;
        $this->_container = $container;
    }

    public function createUser($data)
    {
        $user = new User();
        $hash = $this->_hashPassword($data['password']['first'], $user);
        $user->setEmail($data['email'])->setPassword($hash);
        $user->addUserRole();

        $this->_em->persist($user);
        $this->_em->flush();
    }



    protected function _hashPassword($password, $user)
    {
        $encoder = $this->_container->get('security.password_encoder');

        return $encoder->encodePassword($user, $password);
    }


    public function setContainer(ContainerInterface $container = null)
    {
        $this->_container = $container;
    }
}