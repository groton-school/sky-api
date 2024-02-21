<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $section_id
 * @property ?string $course_code
 * @property ?string $section_name
 * @property ?string $modified_date_time
 * @property ?int $modified_by
 * @property ?string $action
 *
 * @api
 */
class EnrollmentChangeAudit extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "section_id",
        "course_code",
        "section_name",
        "modified_date_time",
        "modified_by",
        "action",
    ];
}
