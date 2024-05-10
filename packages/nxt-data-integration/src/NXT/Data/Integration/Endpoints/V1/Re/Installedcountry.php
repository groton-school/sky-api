<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class Installedcountry extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/installedcountry";

    /**
     * Returns the installed country. Possible values: USA, UK, Canada, Spain,
     * Australia, NewZealand
     *
     * @return string Returned when the operation succeeds. The response body
     *   contains the installed country.
     */
    public function get(): string
    {
        return $this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }
}
