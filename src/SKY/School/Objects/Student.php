<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student Model
 *
 * @property int $id The ID of the student
 * @property string | null $name The name of the student
 *
 * @api
 */
class Student extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
