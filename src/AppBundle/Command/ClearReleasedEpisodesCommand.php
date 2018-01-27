<?php

namespace AppBundle\Command;

use AppBundle\Service\NextEpisodeService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;


class ClearReleasedEpisodesCommand extends Command
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
            ->setName('app:clear_episodes')
            ->setDescription('Test Command')
            ->setHelp('This command search data about next episodes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $releasedEpisodes = $this->nextEpisodeService->getEpisodesToRemove();
        foreach ($releasedEpisodes as $episode){
            $this->nextEpisodeService->removeEpisode($episode);
        }
        $output->writeln('Success');
    }

}