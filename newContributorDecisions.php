#!/usr/bin/env php
<?php
// Application qui permet la création des décisions de dépôt dans HAL
require __DIR__.'/vendor/autoload.php';
use App\Command\DecisionCommand;
use Symfony\Component\Console\Application;
$application = new Application();
$application->add(new \App\Command\ContributorDecisionCommand());
$application->run();