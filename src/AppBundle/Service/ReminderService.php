<?php

namespace AppBundle\Service;

use AppBundle\Entity\Reminder;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



class ReminderService
{

    const DO_NOT_NOTIFY_CODE = -1;
    const NOTIFY_DAY_BEFORE_CODE = 1;
    const NOTIFY_IN_THE_DAY_CODE = 2;

    protected $_em;

    public function __construct(
        EntityManagerInterface $em
    )
    {
        $this->_em = $em;
    }


    public function createReminder(Array $data)
    {
        if(!$data['userId'] || !$data['seriesId'] || !$data['codeX']){
            throw new \Exception('Missing data!');
        }
        $user = $this->_em->getRepository(User::class)->find($data['userId']);

        $reminder = $this->_em->getRepository(Reminder::class)->findOneBy([
           'user'    => $user,
           'seriesId'  => $data['seriesId'],
        ]);

        if(!$reminder){
            $reminder = new Reminder();
            $reminder
                ->setUser($user)
                ->setSeriesId($data['seriesId']);
        }
        $reminder->setNotificationType($data['code']);

        $this->_em->persist($reminder);
        $this->_em->flush();
    }

    public function getReminderOptionForUser(User $user, $id)
    {
        $reminder = $this->_em->getRepository(Reminder::class)->findOneBy([
            'user'    => $user,
            'seriesId'  => $id,
        ]);


        return $reminder ? $reminder->getNotificationType() : null;

    }

    public function getOptionsCodes()
    {
        return [
            self::DO_NOT_NOTIFY_CODE => 'Don\'t Notify',
            self::NOTIFY_DAY_BEFORE_CODE => 'Notify day before premiere',
            self::NOTIFY_IN_THE_DAY_CODE => 'Notify in the premiere day',
        ];
    }

}