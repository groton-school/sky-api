<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * PhoneType Model
 *
 * @property int $id The type ID of a phone number; the type ID corresponds
 *   with the type of phone number (ex. Cell, Work, Home)
 * @property string $type The name of the phone type
 *
 * @api
 */
class PhoneType extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "type",
    ];
}
