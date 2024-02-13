<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * List Field
 *
 * @property string | null $name The name of the field
 * @property string | null $value The value of the field
 *
 * @api
 */
class Field extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["name","value"];
}
