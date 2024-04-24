<?php

use GrotonSchool\SKY\AppEngine\ClientFactory;
use Blackbaud\SKY\School\Client;

$factory = new ClientFactory();
$client = $factory->get(Client::class);
$client->handleRedirect();
