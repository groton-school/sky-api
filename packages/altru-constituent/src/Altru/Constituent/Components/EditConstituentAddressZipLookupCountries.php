<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentAddressZipLookupCountries
 *
 * @property string $country_id countryid
 * @property string $country_name name
 *
 * @api
 */
class EditConstituentAddressZipLookupCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "country_name" => "string",
    ];
}
