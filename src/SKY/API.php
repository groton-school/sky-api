<?php

namespace GrotonSchool\Blackbaud\SKY;

use Exception;
use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;
use League\OAuth2\Client\Token\AccessToken;

class API extends BlackbaudSKY
{
    public function getEndpoint(
        string $path,
        ?AccessToken $token = null
    ): Endpoint {
        if (!$token) {
            if ($this->accessToken) {
                $token = $this->accessToken;
            } else {
                throw new Exception("No access token provided or cached");
            }
        }
        return new Endpoint($this, $path, $token);
    }
}
