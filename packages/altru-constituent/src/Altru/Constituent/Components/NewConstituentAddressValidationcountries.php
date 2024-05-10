<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentAddressValidationCountries
 *
 * @property string $country_id countryid
 * @property bool $browsable browsable
 *
 * @api
 */
class NewConstituentAddressValidationCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "browsable" => "bool",
    ];
}
