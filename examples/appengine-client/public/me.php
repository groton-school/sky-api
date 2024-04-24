<?php

use GrotonSchool\SKY\AppEngine\ClientFactory;
use Blackbaud\SKY\School\Client;

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$factory = new ClientFactory();

/** @var \Blackbaud\SKY\School\Client $client */
$client = $factory->get(Client::class);
try {
    $me = $client->v1->users->me->get();
    $json = json_encode($me, JSON_PRETTY_PRINT);

    echo <<<EOT
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <title>Me</title>
          </head>
          <body>
            <h1>{$me->first_name} {$me->last_name}</h1>
            <pre lang="json">
              {$json}
            </pre>
          </body>
        <html>
        EOT;
} catch (Exception $e) {
    var_dump($e);
}
