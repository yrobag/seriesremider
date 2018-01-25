<?php

namespace AppBundle\Command;

use AppBundle\Entity\NextEpisode;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Reminder;


class UpdateNextEpisodesDataCommand extends Command
{
    const API_NEXT_EPISODE = 'http://api.tvmaze.com/shows/%d?embed=nextepisode';


    public $em;

    public function __construct(
        EntityManagerInterface $entityManager,
        $name = null
    )
    {
        $this->em = $entityManager;

        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:next_episodes')
            ->setDescription('Test Command')
            ->setHelp('This command search data about next episodes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $allSeriesIds =$this->em->getRepository(Reminder::class)->getAllSeriesIds();
        foreach ($allSeriesIds as $id){
            $ch = curl_init(sprintf(self::API_NEXT_EPISODE, $id['seriesId']));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $series = json_decode(curl_exec($ch));
            if(property_exists($series, '_embedded')
                && property_exists($series->_embedded, 'nextepisode')){
                $episode = $series->_embedded->nextepisode;
                if($episode->airdate){

                    $date = new \DateTime($episode->airdate);

                    $nextEpisode = new NextEpisode();
                    $nextEpisode
                        ->setSeriesId($id['seriesId'])
                        ->setDate($date)
                        ->setSeriesName($series->name)
                        ->setTitle($episode->name);

                    $this->em->persist($nextEpisode);
                    $this->em->flush();

                }
            }

        }

        $output->writeln('Success');


    }
}