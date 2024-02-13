<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Enrollment Changes Model
 *
 * @property int | null $id The ID of the student
 * @property string | null $preferred_name 
 * @property string | null $first_name 
 * @property string | null $last_name 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\EnrollmentChangeAudit[]
 *   | null $changes 
 *
 * @api
 */
class EnrollmentChanges extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","preferred_name","first_name","last_name","changes"];
}
