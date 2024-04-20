<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class Serialnumber extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/serialnumber";

    /**
     * Returns the serial number.
     *
     * @return string Returned when the operation succeeds. The response body
     *   contains the serial number.
     */
    public function get(): string
    {
        return $this->send("get", [], []);
    }
}
