<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\OneToMany(targetEntity="Reminder", mappedBy="user")
     */
    private $reminders;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=127, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="hashed_password", type="string", length=255, nullable=true)
     */
    private $hashedPassword;



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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set hashedPassword
     *
     * @param string $hashedPassword
     *
     * @return User
     */
    public function setHashedPassword($hashedPassword)
    {
        $this->hashedPassword = $hashedPassword;

        return $this;
    }

    /**
     * Get hashedPassword
     *
     * @return string
     */
    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

}

