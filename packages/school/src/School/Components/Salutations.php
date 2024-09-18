<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Salutations Model
 *
 * @property ?string $informal The informal salutation for the address
 * @property ?string $formal The formal salutation for the address
 * @property ?string $household The household salutation for the address
 *
 * @api
 */
class Salutations extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "informal" => "string",
        "formal" => "string",
        "household" => "string",
    ];
}
