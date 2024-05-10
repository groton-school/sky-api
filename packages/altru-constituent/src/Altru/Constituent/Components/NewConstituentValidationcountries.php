<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentValidationCountries
 *
 * @property string $country_id countryid
 * @property bool $browsable browsable
 *
 * @api
 */
class NewConstituentValidationCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "browsable" => "bool",
    ];
}
