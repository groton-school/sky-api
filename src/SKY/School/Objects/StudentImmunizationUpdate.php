<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $user_id The ID of the student.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\StudentImmunization[]
 *   $immunizations The list of student immunizations
 *
 * @api
 */
class StudentImmunizationUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","immunizations"];
}
