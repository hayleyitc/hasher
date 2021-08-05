<?php

namespace Hasher;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HasherCommand extends Command
{
    protected static $defaultName = 'hash';

    protected static $defaultDescription = 'Generate hashes of input arguments';

    protected function configure()
    {
        $this->setDefinition([
            new InputArgument(
                'plaintext',
                InputArgument::IS_ARRAY | InputArgument::REQUIRED,
                'String(s) to generate hashes for'
            ),
        ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $plainTextStrings = $input->getArgument('plaintext');

        foreach ($plainTextStrings as $pt) {
            $cipherText = password_hash($pt, PASSWORD_DEFAULT);

            $output->writeln($pt . " => " . $cipherText);
        }

        return Command::SUCCESS;
    }
}