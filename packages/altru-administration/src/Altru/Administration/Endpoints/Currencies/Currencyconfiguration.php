<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Currencies;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\CurrencyConfigurationView;

/**
 * @api
 */
class Currencyconfiguration extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/currencies/{currency_id}/currencyconfiguration";

    /**
     * This view form loads information necessary for formatting a value as
     * currency.
     *
     * @param array{currency_id: string} $params An associative array
     *     - currency_id: The currency id.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\CurrencyConfigurationView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCurrencyId(array $params): CurrencyConfigurationView
    {
        assert(isset($params['currency_id']), new ArgumentException("Parameter `currency_id` is required"));

        return new CurrencyConfigurationView($this->send("get", ["{currency_id}" => $params['currency_id']], []));
    }
}
