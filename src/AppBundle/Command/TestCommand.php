<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:test')
            ->setDescription('Test Command')
            ->setHelp('This command is a test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('12345');
        $output->write('6431');
        $output->write('6431');
    }
}