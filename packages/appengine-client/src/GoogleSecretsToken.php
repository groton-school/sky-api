<?php

namespace GrotonSchool\SKY\AppEngine;

use Battis\LazySecrets\Cache;
use Battis\OpenAPI\Client\TokenStorage;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Token\AccessTokenInterface;

class GoogleSecretsToken extends TokenStorage
{
    private const ACCESS_TOKEN = 'BLACKBAUD_API_TOKEN';

    private Cache $secrets;

    /**
     * @param ?string|\Battis\LazySecrets\Cache $projectId
     */
    public function __construct(mixed $projectId)
    {
        $this->secrets =
            $projectId instanceof Cache
                ? $projectId
                : new Cache($projectId ?? $_ENV['GOOGLE_CLOUD_PROJECT']);
    }

    public function getToken(): ?AccessTokenInterface
    {
        $token = $this->secrets->get(self::ACCESS_TOKEN);
        if ($token !== null) {
            /** @psalm-suppress MixedArgument */
            return new AccessToken($token);
        }
        return null;
    }

    public function setToken(AccessTokenInterface $token): bool
    {
        return $this->secrets->set(self::ACCESS_TOKEN, $token, 1);
    }
}
