<?php

namespace AppBundle\Service;

use AppBundle\Entity\Reminder;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\NextEpisode;





class NextEpisodeService
{
    const API_NEXT_EPISODE = 'http://api.tvmaze.com/shows/%d?embed=nextepisode';

    protected $em;

    public function __construct(
        EntityManagerInterface $em
    )
    {
        $this->em = $em;
    }

    public function getSeriesIds()
    {
        return $this->em->getRepository(Reminder::class)->getAllSeriesIds();
    }

    public function checkIfAlreadyCreated($seriesId)
    {
        return $this->em->getRepository(NextEpisode::class)->findOneBy(['seriesId' => $seriesId]);
    }

    public function getNextEpisodeData($seriesId)
    {
        $ch = curl_init(sprintf(self::API_NEXT_EPISODE, $seriesId));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return json_decode(curl_exec($ch));
    }

    public function checkIfContainNextEpisodeData($data)
    {
        return property_exists($data, '_embedded') && property_exists($data->_embedded, 'nextepisode');
    }

    public function createNewEpisode($episode, $data)
    {
        if($episode->airdate){

            $date = new \DateTime($episode->airdate);

            $nextEpisode = new NextEpisode();
            $nextEpisode
                ->setSeriesId($data->id)
                ->setDate($date)
                ->setSeriesName($data->name)
                ->setTitle($episode->name);

            $this->em->persist($nextEpisode);
            $this->em->flush();

        }
    }

    public function getEpisodesToRemove()
    {
        return $this->em->getRepository(NextEpisode::class)->getReleasedEpisodes();
    }

    public function removeEpisode($episode)
    {
        $this->em->remove($episode);
        $this->em->flush();

        return $this;

    }


}