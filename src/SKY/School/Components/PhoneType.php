<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * PhoneType Model
 *
 * @property int $id The type ID of a phone number; the type ID corresponds
 *   with the type of phone number (ex. Cell, Work, Home)
 * @property ?string $type The name of the phone type
 *
 * @api
 */
class PhoneType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "type" => "string",
    ];
}
