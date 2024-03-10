<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentProfilePictureView;

/**
 * @api
 */
class Profilepicture extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/profilepicture";

    /**
     * Defines the fields for the individual Personal Information tile.
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentProfilePictureView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): ConstituentProfilePictureView
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));

        return new ConstituentProfilePictureView($this->send("get", ["{constituent_id}" => $params['constituent_id']], []));
    }
}
