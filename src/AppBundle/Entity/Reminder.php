<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reminder
 *
 * @ORM\Table(name="reminder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReminderRepository")
 */
class Reminder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reminders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="series_id", type="integer")
     */
    private $seriesId;

    /**
     * @var int
     *
     * @ORM\Column(name="notification_type", type="smallint")
     */
    private $notificationType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set seriesId
     *
     * @param integer $seriesId
     *
     * @return Reminder
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;

        return $this;
    }

    /**
     * Get seriesId
     *
     * @return int
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * Set notificationType
     *
     * @param integer $notificationType
     *
     * @return Reminder
     */
    public function setNotificationType($notificationType)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * Get notificationType
     *
     * @return int
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}

