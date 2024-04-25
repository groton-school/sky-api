# Blackbaud SKY API OAuth 2.0 Client

This package provides Blackbaud SKY OAuth 2.0 support for the [PHP League's OAuth 2.0 Client](https://oauth2-client.thephpleague.com/)

See [this example](https://github.com/groton-school/sky-api/tree/main/examples/oauth2) for usage.

[![Version](http://poser.pugx.org/groton-school/oauth2-blackbaudsky/version)](https://packagist.org/packages/groton-school/oauth2-blackbaudsky)
[![License](http://poser.pugx.org/groton-school/oauth2-blackbaudsky/license)](https://packagist.org/packages/groton-school/oauth2-blackbaudsky)

---

This package is compliant with [PSR-1][], [PSR-2][], [PSR-4][], and [PSR-7][]. If you notice compliance oversights, please send a patch via pull request. If you're interesting in contributing to this library, please take a look at our [contributing guidelines](CONTRIBUTING.md).

## Requirements

The following versions of PHP are supported.

- PHP 5.6
- PHP 7.0
- PHP 7.1
- PHP 7.2
- PHP 7.3
- PHP 7.4
- PHP 8.0

## Usage

Refer to [this project](https://github.com/groton-school/sky-api/tree/main/examples/oauth2) for example usage.

### Authorization Code Grant

The following example uses the out-of-the-box `GenericProvider` provided by this library. If you're looking for a specific provider (i.e. Facebook, Google, GitHub, etc.), take a look at our [list of provider client libraries](docs/providers/thirdparty.md). **HINT: You're probably looking for a specific provider.**

The authorization code grant type is the most common grant type used when authenticating users with a third-party service. This grant type utilizes a client (this library), a server (the service provider), and a resource owner (the user with credentials to a protected—or owned—resource) to request access to resources owned by the user. This is often referred to as _3-legged OAuth_, since there are three parties involved.

The following example illustrates this using [Brent Shaffer's](https://github.com/bshaffer) demo OAuth 2.0 application named **Lock'd In**. When running this code, you will be redirected to Lock'd In, where you'll be prompted to authorize the client to make requests to a resource on your behalf.

Now, you don't really have an account on Lock'd In, but for the sake of this example, imagine that you are already logged in on Lock'd In when you are redirected there.

```php
$sky = new \GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY([
  BlackbaudSKY::ACCESS_KEY => 'key', // A Blackbaud SKY API subscription access key
  'clientId' => 'demoapp', // The client ID assigned to your app by Blackbaud
  'clientSecret' => 'demopass', // The client password assigned to your app by Blackbaud
  'redirectUri' => 'http://example.com/your-redirect-url/',
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
  exit();

  // Check given state against previously stored one to mitigate CSRF attack
} elseif (
  empty($_GET['state']) ||
  (isset($_SESSION['oauth2state']) &&
    $_GET['state'] !== $_SESSION['oauth2state'])
) {
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

    // We have an access token, which we may use in authenticated
    // requests against the service provider's API.
    echo 'Access Token: ' . $accessToken->getToken() . '<br>';
    echo 'Refresh Token: ' . $accessToken->getRefreshToken() . '<br>';
    echo 'Expired in: ' . $accessToken->getExpires() . '<br>';
    echo 'Already expired? ' .
      ($accessToken->hasExpired() ? 'expired' : 'not expired') .
      '<br>';

    // The provider provides a way to get an authenticated API request for
    // the service, using the access token; it returns an object conforming
    // to Psr\Http\Message\RequestInterface.
    $request = $sky->getAuthenticatedRequest(
      'GET',
      'https://api.sky.blackbaud.com/school/v1/academics/departments',
      $accessToken
    );

    // For convenience, the provider also wraps endpoints with a Guzzle client
    $school = $sky->endpoint('school/v1');
    var_export($school->get('levels'));

    // ...and those endpoints can also nest further endpoints
    $academics = $school->endpoint('academics');
    var_export($academics->get('departments'));
  } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
    // Failed to get the access token or user details.
    exit($e->getMessage());
  }
}
```

### Refreshing a Token

Once your application is authorized, you can refresh an expired token using a refresh token rather than going through the entire process of obtaining a brand new token. To do so, simply reuse this refresh token from your data store to request a refresh.

_This example uses [Brent Shaffer's](https://github.com/bshaffer) demo OAuth 2.0 application named **Lock'd In**. See authorization code example above, for more details._

```php
$sky = new \League\OAuth2\Client\Provider\GenericProvider([
  BlackbaudSKY::ACCESS_KEY => 'key', // A Blackbaud SKY API subscription access key
  'clientId' => 'demoapp', // The client ID assigned to your app by Blackbaud
  'clientSecret' => 'demopass', // The client password assigned to your app by Blackbaud
]);

$existingAccessToken = getAccessTokenFromYourDataStore();

if ($existingAccessToken->hasExpired()) {
  $newAccessToken = $sky->getAccessToken('refresh_token', [
    'refresh_token' => $existingAccessToken->getRefreshToken(),
  ]);

  // Purge old access token and store new access token to your data store.
}
```

### Using a proxy

It is possible to use a proxy to debug HTTP calls made to a provider. All you need to do is set the `proxy` and `verify` options when creating your Provider instance. Make sure you enable SSL proxying in your proxy.

```php
$sky = new \League\OAuth2\Client\Provider\GenericProvider([
    BlackbaudSKY::ACCESS_KEY  => 'key',        // A Blackbaud SKY API subscription access key
    'clientId'                => 'demoapp',    // The client ID assigned to your app by Blackbaud
    'clientSecret'            => 'demopass',   // The client password assigned to your app by Blackbaud
    'redirectUri'             => 'http://example.com/your-redirect-url/'
    'proxy'                   => '192.168.0.1:8888',
    'verify'                  => false
]);
```

## Install

Via Composer

```bash
$ composer require groton-school/oauth2-blackbaudsky
```

## License

The MIT License (MIT). Please see [License File](https://github.com/thephpleague/oauth2-client/blob/master/LICENSE) for more information.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md
[PSR-7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md
