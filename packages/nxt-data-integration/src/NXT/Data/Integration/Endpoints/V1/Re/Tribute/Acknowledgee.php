<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgeeCreate;

/**
 * @api
 */
class Acknowledgee extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/tribute/acknowledgee";

    /**
     * Creates a new tribute acknowledgee. A null relationship ID indicates a
     * self-acknowledgee.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgeeCreate
     *   $requestBody The acknowledgee to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the ID
     *   of the newly created record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(TributeAcknowledgeeCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
