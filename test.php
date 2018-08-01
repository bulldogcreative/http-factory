<?php

include 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryMaker;

$guzzle = FactoryMaker::getFactory('guzzle');
var_dump($guzzle);
