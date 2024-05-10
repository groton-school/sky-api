<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentAddressValidationCountries
 *
 * @property string $country_id countryid
 * @property bool $browsable browsable
 *
 * @api
 */
class EditConstituentAddressValidationCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "browsable" => "bool",
    ];
}
