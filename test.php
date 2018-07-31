<?php

use Bulldog\HttpFactory\Factories\RequestFactory;
use Symfony\Component\HttpFoundation\Request;
use Bulldog\HttpFactory\Adapters\RequestAdapter;

include 'vendor/autoload.php';

$request = new Request;
$requestAdapter = new RequestAdapter($request);
$requestFactory = new RequestFactory($requestAdapter);