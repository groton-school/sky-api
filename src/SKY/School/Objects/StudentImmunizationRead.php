<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $id The ID of student immunization
 * @property
 *   \GrotonSchool\Blackbaud\SKY\School\Objects\StudentImmunizationType
 *   $immunization_type Student immunization type
 * @property bool | null $is_complete Returns true if immunization exists for
 *   the student
 * @property string | null $immunization_date The date of immunization. Use
 *   format ...
 *
 * @api
 */
class StudentImmunizationRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","immunization_type","is_complete","immunization_date"];
}
