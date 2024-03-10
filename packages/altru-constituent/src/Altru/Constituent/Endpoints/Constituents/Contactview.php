<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentPrimaryContactInformationView;

/**
 * @api
 */
class Contactview extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/contactview";

    /**
     * This view form displays the preferred address, phone, and email
     * information for a given constituent
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentPrimaryContactInformationView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): ConstituentPrimaryContactInformationView
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));

        return new ConstituentPrimaryContactInformationView($this->send("get", ["{constituent_id}" => $params['constituent_id']], []));
    }
}
