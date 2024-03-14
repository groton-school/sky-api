<?php

namespace GrotonSchool\SKY\AppEngine;

use Battis\LazySecrets\Cache;
use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Client;
use Blackbaud\SKY\School\Client as SchoolClient;
use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;

/**
 * @api
 */
class ClientFactory
{
    private const ACCESS_KEY = "BLACKBAUD_ACCESS_KEY";
    private const CLIENT_ID = "BLACKBAUD_CLIENT_ID";
    private const CLIENT_SECRET = "BLACKBAUD_CLIENT_SECRET";
    private const REDIRECT_URL = "BLACKBAUD_REDIRECT_URL";

    private Cache $secrets;
    private TokenStorage $storage;

    public function __construct(?string $projectId)
    {
        $this->secrets = new Cache($projectId ?? $_ENV["GOOGLE_CLOUD_PROJECT"]);
        $this->storage = new TokenStorage($this->secrets);
    }

    /**
     * @param class-string<BaseEndpoint> $class
     *
     * @return BaseEndpoint
     *
     * @psalm-suppress UnsafeInstantiation
     */
    public function get(string $class): BaseEndpoint
    {
        return new $class(
            new Client(
                new BlackbaudSKY([
                BlackbaudSKY::ACCESS_KEY => $this->secrets->get(self::ACCESS_KEY),
                "clientId" => $this->secrets->get(self::CLIENT_ID),
                "clientSecret" => $this->secrets->get(self::CLIENT_SECRET),
                "redirectUri" => $this->secrets->get(self::REDIRECT_URL),
        ]),
                $this->storage
            )
        );
    }
}
