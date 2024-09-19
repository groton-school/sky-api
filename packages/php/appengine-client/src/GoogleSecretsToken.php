<?php

namespace GrotonSchool\SKY\AppEngine;

use Battis\LazySecrets\Cache;
use Battis\OpenAPI\Client\TokenStorage;
use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Token\AccessTokenInterface;

class GoogleSecretsToken extends TokenStorage
{
    private const ACCESS_TOKEN = 'BLACKBAUD_API_TOKEN';

    private Cache $secrets;
    private BlackbaudSKY $oauth2;

    /**
     * @param ?string|\Battis\LazySecrets\Cache $projectId
     */
    public function __construct(mixed $projectId, BlackbaudSKY $oauth2)
    {
        $this->secrets =
            $projectId instanceof Cache
                ? $projectId
                : new Cache($projectId ?? $_ENV['GOOGLE_CLOUD_PROJECT']);
        $this->oauth2 = $oauth2;
    }

    public function getToken(): ?AccessTokenInterface
    {
        $result = $this->secrets->get(self::ACCESS_TOKEN);
        if ($result != null) {
            $token = new AccessToken($result);
            $this->oauth2->setAccessToken($token);
            return $token;
        }
        return null;
    }

    public function setToken(AccessTokenInterface $token): bool
    {
        return $this->secrets->set(self::ACCESS_TOKEN, $token, 1);
    }
}
