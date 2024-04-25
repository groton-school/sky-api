<?php

use GrotonSchool\SKY\AppEngine\ClientFactory;
use Blackbaud\SKY\School\Client;

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
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{$me->first_name} {$me->last_name}</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
          </head>
          <body>
            <div class="container">
              <h1>{$me->first_name} {$me->last_name}</h1>
              <pre lang="json">
                {$json}
              </pre>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </div>
          </body>
        <html>
        EOT;
} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
}
