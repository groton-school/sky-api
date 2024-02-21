<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $user_id The ID of the student.
 * @property \Blackbaud\SKY\School\Components\StudentImmunization[]
 *   $immunizations The list of student immunizations
 *
 * @api
 */
class StudentImmunizationUpdate extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "immunizations",
    ];
}
