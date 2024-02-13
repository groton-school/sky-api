<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student condition update
 *
 * @property string | null $date_as_of The date the condition began. Use
 *   format ...
 * @property string | null $date_until The date the condition ended. Use
 *   format ...
 * @property string | null $notes The notes for the condition
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MedicalSecurityRole[] |
 *   null $role_access Array of roles. If a role is not included, default
 *   access will be set to true
 * @property int[] | null $medications The list of student medication IDs for
 *   the condition. If included, this list will replace the existing list of
 *   medications.
 *
 * @api
 */
class StudentConditionUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","notes","role_access","medications"];
}
