<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medication
 *
 * @property int $user_id The ID of the student.
 * @property \Blackbaud\SKY\School\Components\StudentImmunization[]
 *   $immunizations The list of student immunizations
 *
 * @api
 */
class StudentImmunizationUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "immunizations" => "\Blackbaud\SKY\School\Components\StudentImmunization[]",
    ];
}
