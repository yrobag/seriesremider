<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



class ReminderService
{

    const DO_NOT_NOTIFY_CODE = 0;
    const NOTIFY_DAY_BEFORE_CODE = 1;
    const NOTIFY_IN_THE_DAY_CODE = 2;





    public function getOptionsCodes()
    {
        return [
            self::DO_NOT_NOTIFY_CODE => 'Don\'t Notify',
            self::NOTIFY_DAY_BEFORE_CODE => 'Notify day before premiere',
            self::NOTIFY_IN_THE_DAY_CODE => 'Notify in the premiere day',
        ];
    }

}