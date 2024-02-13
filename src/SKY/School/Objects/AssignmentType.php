<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Assignment Type Model
 *
 * @property int | null $id The ID for the assignment type
 * @property string | null $name The name of the assignment type
 * @property string | null $percentage The calculated percentage for the
 *   assignment type for this section
 * @property float | null $weight The weight applied to the assignment type
 *
 * @api
 */
class AssignmentType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","percentage","weight"];
}
