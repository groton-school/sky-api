<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewOrganizationValidationCountries
 *
 * @property string $country_id countryid
 * @property bool $browsable browsable
 *
 * @api
 */
class NewOrganizationValidationCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "browsable" => "bool",
    ];
}
