<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentPhoneCountrycodes
 *
 * @property string $country_id countryid
 * @property string $country_code country code
 *
 * @api
 */
class UpdateConstituentPhoneCountrycodes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "country_code" => "string",
    ];
}
