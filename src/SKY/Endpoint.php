<?php

namespace GrotonSchool\Blackbaud\SKY;

use Exception;
use Battis\Path\Path;
use GrotonSchool\OAuth2\Client\Provider\BlackbaudSKY;
use GuzzleHttp\Client;
use League\OAuth2\Client\Token\AccessToken;

class Endpoint
{
    /** @var Client */
    private $client;

    /** @var BlackbaudSKY */
    private $sky;

    /** @var string */
    private $path;

    /** @var AccessToken */
    private $accessToken;

    public function __construct(
        BlackbaudSKY $sky,
        string $path,
        AccessToken $accessToken
    ) {
        assert(!empty($sky), new Exception("BlackbaudSKY instance required"));
        $this->sky = $sky;
        $this->path = $path;
        $this->accessToken = $accessToken;
        $this->client = new Client([
      "base_uri" => Path::join($this->sky->getBaseApiUrl(), $this->path) . "/",
    ]);
    }

    public function send(string $method, string $url, array $options = []): mixed
    {
        /*
         * TODO deal with refreshing tokens (need callback to store new refresh token)
         *   https://developer.blackbaud.com/skyapi/docs/in-depth-topics/api-request-throttling
         */
        usleep(100000);
        $request = $this->sky->getAuthenticatedRequest(
            $method,
            $url,
            $this->accessToken,
            $options
        );
        return json_decode(
            $this->client
        ->send($request)
        ->getBody()
        ->getContents(),
            true
        );
    }

    public function get(string $url, array $options = []): mixed
    {
        return $this->send("get", $url, $options);
    }

    public function post(string $url, array $options = []): mixed
    {
        return $this->send("post", $url, $options);
    }

    public function patch(string $url, array $options = []): mixed
    {
        return $this->send("patch", $url, $options);
    }

    public function delete(string $url, array $options = []): mixed
    {
        return $this->send("delete", $url, $options);
    }

    public function getEndpoint(string $path): Endpoint
    {
        return new Endpoint(
            $this->sky,
            Path::join($this->path, $path),
            $this->accessToken
        );
    }
}
