<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewIndividualZipLookupCountries
 *
 * @property string $country_id countryid
 * @property string $country_name name
 *
 * @api
 */
class NewIndividualZipLookupCountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "country_name" => "string",
    ];
}
