<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;

$output = new ConsoleOutput();
$output->setFormatter(new OutputFormatter(true));

$output->writeln(
    'The <comment>console</comment> component is'
    .' <bg=magenta;fg=cyan>sweet!</>'
);