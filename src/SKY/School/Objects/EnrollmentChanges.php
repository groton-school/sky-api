<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Enrollment Changes Model
 *
 * @property int $id The ID of the student
 * @property string $preferred_name
 * @property string $first_name
 * @property string $last_name
 * @property \Blackbaud\SKY\School\Objects\EnrollmentChangeAudit[] $changes
 *
 * @api
 */
class EnrollmentChanges extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "preferred_name",
        "first_name",
        "last_name",
        "changes",
    ];
}
