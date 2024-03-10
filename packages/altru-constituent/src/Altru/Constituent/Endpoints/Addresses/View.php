<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressView;

/**
 * @api
 */
class View extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/addresses/{address_id}/view";

    /**
     * This dataform template is used for viewing basic address information.
     *
     * @param array{address_id: string} $params An associative array
     *     - address_id: The address id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByAddressId(array $params): ConstituentAddressView
    {
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));

        return new ConstituentAddressView($this->send("get", ["{address_id}" => $params['address_id']], []));
    }
}
