<?php

use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

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
    // Redirect URI registered with the provider
    'redirectUri' => getenv('OAUTH_REDIRECT_URL'),
]);

// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {
    // Fetch the authorization URL from the provider; this returns the
    // urlAuthorize option and generates and applies any necessary parameters
    // (e.g. state).
    $authorizationUrl = $sky->getAuthorizationUrl();

    // Get the state generated for you and store it to the session.
    $_SESSION['oauth2state'] = $sky->getState();

    // Redirect the user to the authorization URL.
    header('Location: ' . $authorizationUrl);
    exit;

    // Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {
    if (isset($_SESSION['oauth2state'])) {
        unset($_SESSION['oauth2state']);
    }

    exit('Invalid state');
} else {
    try {
        // Try to get an access token using the authorization code grant.
        $accessToken = $sky->getAccessToken('authorization_code', [
            'code' => $_GET['code'],
        ]);

        $school = $sky->endpoint('school/v1');
        $levels = $school->get('levels');
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        // Failed to get the access token or user details.
        exit($e->getMessage());
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Request Token</title>
    </head>
    <body>
    
    <h1>Request Token</h1>
    <p>Requested an access token using <code>authorization_code</code> flow.</p>
    
    <h3>Access Token</h3>
    <pre lang="json"><?= json_encode($accessToken, JSON_PRETTY_PRINT) ?></pre>
    <form method="post" action="refresh.php">
        <?php
        foreach ($accessToken->jsonSerialize() as $param => $value) {
            echo <<<EOT
                        <input name="{$param}" value="$value" type="hidden" />
                EOT;
        }
?>
        <button type="submit">Refresh Token</button>
    </form>

    <h3><code>GET /school/v1/levels</code></h3>
    <pre lang="json"><?= json_encode($levels, JSON_PRETTY_PRINT) ?></pre>
    </body>
</html>
