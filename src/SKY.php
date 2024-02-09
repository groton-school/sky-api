<?php

namespace GrotonSchool\Blackbaud;

use Exception;
use GrotonSchool\Blackbaud\SKY\API;
use League\OAuth2\Client\Token\AccessToken;
use Psr\SimpleCache\CacheInterface;

class SKY
{
    // environment variables
    public const Bb_ACCESS_KEY = "BLACKBAUD_ACCESS_KEY";
    public const Bb_CLIENT_ID = "BLACKBAUD_CLIENT_ID";
    public const Bb_CLIENT_SECRET = "BLACKBAUD_CLIENT_SECRET";
    public const Bb_REDIRECT_URL = "BLACKBAUD_REDIRECT_URL";
    public const Bb_TOKEN = "BLACKBAUD_API_TOKEN";

    // keys
    public const OAuth2_STATE = "oauth2_state";
    public const Request_URI = "request_uri";

    // OAuth2 terms
    public const CODE = "code";
    public const STATE = "state";
    public const AUTHORIZATION_CODE = "authorization_code";
    public const REFRESH_TOKEN = "refresh_token";

    private ?API $api = null;

    private CacheInterface $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
        session_start();
    }

    public function api()
    {
        if (!self::$api) {
            self::$api = new API([
              API::ACCESS_KEY => $this->cache->get(self::Bb_ACCESS_KEY),
              "clientId" => $this->cache->get(self::Bb_CLIENT_ID),
              "clientSecret" => $this->cache->get(self::Bb_CLIENT_SECRET),
              "redirectUri" => $this->cache->get(self::Bb_REDIRECT_URL),
            ]);
        }
        return self::$api;
    }

    public function isReady()
    {
        return !!self::getToken(false);
    }

    public function getToken($interactive = true)
    {
        $cachedToken = $this->cache->get(self::Bb_TOKEN, true);
        $token = $cachedToken ? new AccessToken($cachedToken) : null;

        // acquire a Bb SKY API access token
        if (empty($token)) {
            if ($interactive) {
                // interactively acquire a new Bb access token
                if (false === isset($_GET[self::CODE])) {
                    $authorizationUrl = self::api()->getAuthorizationUrl();
                    $_SESSION[self::OAuth2_STATE] = self::api()->getState();
                    // TODO wipe existing token?
                    $this->cache->set(self::Request_URI, $_SERVER["REQUEST_URI"]);
                    header("Location: $authorizationUrl");
                    exit();
                } elseif (
                    empty($_GET[self::STATE]) ||
                    (isset($_SESSION[self::OAuth2_STATE]) &&
                      $_GET[self::STATE] !== $_SESSION[self::OAuth2_STATE])
                ) {
                    if (isset($_SESSION[self::OAuth2_STATE])) {
                        unset($_SESSION[self::OAuth2_STATE]);
                    }

                    throw new Exception(json_encode(["error" => "invalid state"]));
                } else {
                    $token = self::api()->getAccessToken(self::AUTHORIZATION_CODE, [
                      self::CODE => $_GET[self::CODE],
                    ]);
                    $this->cache->set(self::Bb_TOKEN, $token);
                }
            } else {
                return null;
            }
        } elseif ($token->hasExpired()) {
            // use refresh token to get new Bb access token
            $newToken = self::api()->getAccessToken(self::REFRESH_TOKEN, [
              self::REFRESH_TOKEN => $token->getRefreshToken(),
            ]);
            // FIXME need to handle _not_ being able to refresh!
            $this->cache->set(self::Bb_TOKEN, $newToken);
            $token = $newToken;
        } else {
            self::api()->setAccessToken($token);
        }

        return $token;
    }

    public function handleRedirect()
    {
        self::getToken();
        $uri = $this->cache->get(self::Request_URI) ?? "/";
        header("Location: $uri");
    }
}
