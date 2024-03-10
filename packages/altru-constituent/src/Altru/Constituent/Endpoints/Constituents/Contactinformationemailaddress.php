<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentContactListCollection;

/**
 * @api
 */
class Contactinformationemailaddress extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/contactinformationemailaddress";

    /**
     * This datalist returns all email address contact information for a
     * constituent.
     *
     * @param array{constituent_id: string, include_former: bool, limit: int}
     *   $params An associative array
     *     - constituent_id: The constituent id.
     *     - include_former: show former contact information
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentContactListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): ConstituentContactListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['include_former']), new ArgumentException("Parameter `include_former` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentContactListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["include_former" => $params['include_former'],
        "limit" => $params['limit']]));
    }
}
