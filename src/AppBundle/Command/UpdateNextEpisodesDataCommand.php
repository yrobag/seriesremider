<?php

namespace AppBundle\Command;

use AppBundle\Service\NextEpisodeService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;


class UpdateNextEpisodesDataCommand extends Command
{

    public $em;

    public $nextEpisodeService;

    public function __construct(
        EntityManagerInterface $entityManager,
        NextEpisodeService $nextEpisodeService,
        $name = null
    )
    {
        $this->em = $entityManager;
        $this->nextEpisodeService = $nextEpisodeService;

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
        $allSeriesIds =$this->nextEpisodeService->getSeriesIds();
        foreach ($allSeriesIds as $id) {
            $id = $id['seriesId'];


            if ($this->nextEpisodeService->checkIfAlreadyCreated($id)){
                continue;
            }

            $data = $this->nextEpisodeService->getNextEpisodeData($id);

            if($this->nextEpisodeService->checkIfContainNextEpisodeData($data)){
                $episode = $data->_embedded->nextepisode;
                $this->nextEpisodeService->createNewEpisode($episode, $data);
            }

        }
        $output->writeln('Success');


    }


}