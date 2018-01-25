<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NextEpisode
 *
 * @ORM\Table(name="next_episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NextEpisodeRepository")
 */
class NextEpisode
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
     * @var int
     *
     * @ORM\Column(name="series_id", type="integer", unique=true)
     */
    private $seriesId;


    /**
     * @var string
     *
     * @ORM\Column(name="series_name", type="string", nullable=true)
     */
    private $seriesName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * @return NextEpisode
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return NextEpisode
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->seriesName;
    }

    /**
     * @param string $seriesName
     * @return $this
     */
    public function setSeriesName($seriesName)
    {
        $this->seriesName = $seriesName;
        return $this;

    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}

