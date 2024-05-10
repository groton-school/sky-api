<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Components\GetVersionInformationView;

/**
 * @api
 */
class Information extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/information";

    /**
     * Returns the current product version.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\GetVersionInformationView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     */
    public function get(): GetVersionInformationView
    {
        return new GetVersionInformationView($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
