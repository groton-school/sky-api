<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentValidationcountries
 *
 * @property string $country_id countryid
 * @property bool $browsable browsable
 *
 * @api
 */
class NewConstituentValidationcountries extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "country_id" => "string",
        "browsable" => "bool",
    ];
}
