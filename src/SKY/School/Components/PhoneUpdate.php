<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * PhoneUpdate Model
 *
 * @property ?string $number The phone number
 * @property ?int $type_id The type ID of a phone number; the type ID
 *   corresponds with the type of phone number (ex. Cell, Work, Home)
 *
 * @api
 */
class PhoneUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "number" => "string",
        "type_id" => "int",
    ];
}
