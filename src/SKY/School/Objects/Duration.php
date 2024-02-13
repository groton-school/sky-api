<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Duration Model
 *
 * @property int $id The ID of the duration
 * @property string | null $name The starting term of the section
 *
 * @api
 */
class Duration extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
