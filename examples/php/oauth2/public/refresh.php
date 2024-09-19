<?php

use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;
use League\OAuth2\Client\Token\AccessToken;

require_once __DIR__ . '/../vendor/autoload.php';

$sky = new BlackbaudSKY([
    /**
     * Blackbaud subscription access key
     * @link https://developer.blackbaud.com/subscriptions/
     */
    BlackbaudSKY::ACCESS_KEY => getenv('BLACKBAUD_ACCESS_KEY'),

    /**
     * OAuth 2.0 App Credentials
     * @link https://developer.blackbaud.com/apps/
     */
    // The client ID assigned to you by the provider
    'clientId' => getenv('OAUTH_CLIENT_ID'),
    // The client password assigned to you by the provider
    'clientSecret' => getenv('OAUTH_CLIENT_SECRET'),
]);

$existingAccessToken = new AccessToken($_POST); // get access token from your data store

// FIXME normally we'd test $existingAccessToken->hasExpired() before refreshing
$newAccessToken = $sky->getAccessToken('refresh_token', [
    'refresh_token' => $existingAccessToken->getRefreshToken(),
]);

// Purge old access token and store new access token to your data store.

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Refresh Token</title>
    </head>
    <body>
    <h1>Refresh Token</h1>
    <p>Requested an access token using <code>refresh</code> flow.</p>
    <h3>Access Token</h3>
    <pre lang="json"><?= json_encode($newAccessToken, JSON_PRETTY_PRINT) ?></pre>
    <form method="post" action="refresh.php">
        <?php
        foreach ($newAccessToken->jsonSerialize() as $param => $value) {
            echo <<<EOT
                        <input name="{$param}" value="$value" type="hidden" />
                EOT;
        }
?>
        <button type="submit">Refresh Token</button>
    </form>
    </body>
</html>
