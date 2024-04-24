<?php

use GrotonSchool\SKY\AppEngine\ClientFactory;
use Blackbaud\SKY\School\Client;

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new ClientFactory();
$client = $factory->get(Client::class);
$client->handleRedirect();
