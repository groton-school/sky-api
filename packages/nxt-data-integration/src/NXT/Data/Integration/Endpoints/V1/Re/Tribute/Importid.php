<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\Tribute;

/**
 * @api
 */
class Importid extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/tribute/importid/{importid}";

    /**
     * Returns details about a tribute.
     *
     * @param array{importid: string} $params An associative array
     *     - importid: The tribute import ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Tribute Returned
     *   when the operation succeeds. The response body contains the tribute
     *   record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByImportid(array $params): Tribute
    {
        assert(isset($params['importid']), new ArgumentException("Parameter `importid` is required"));

        return new Tribute($this->send("get", ["{importid}" => $params['importid']], []));
    }
}
