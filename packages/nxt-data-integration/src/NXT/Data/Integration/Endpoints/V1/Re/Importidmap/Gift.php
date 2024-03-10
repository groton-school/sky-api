<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\ImportIdMap;

/**
 * @api
 */
class Gift extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/importidmap/gift/{importid}";

    /**
     * Returns a gift system record id mapping for a given import id.
     *
     * @param array{importid: string} $params An associative array
     *     - importid: The gift import ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\ImportIdMap
     *   Returned when the operation succeeds. The response body contains the
     *   system record id and the import id.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByImportid(array $params): ImportIdMap
    {
        assert(isset($params['importid']), new ArgumentException("Parameter `importid` is required"));

        return new ImportIdMap($this->send("get", ["{importid}" => $params['importid']], []));
    }
}
