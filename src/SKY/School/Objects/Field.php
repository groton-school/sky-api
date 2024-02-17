<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * List Field
 *
 * @property string $name The name of the field
 * @property string $value The value of the field
 *
 * @api
 */
class Field extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "name",
        "value",
    ];
}
