<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentPhoneCountrycodes
 *
 * @property string $country_id countryid
 * @property string $country_code country code
 *
 * @api
 */
class NewConstituentPhoneCountrycodes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "country_code" => "string",
    ];
}
