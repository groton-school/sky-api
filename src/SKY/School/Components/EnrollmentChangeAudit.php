<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class EnrollmentChangeAudit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_id" => "int",
        "course_code" => "string",
        "section_name" => "string",
        "modified_date_time" => "string",
        "modified_by" => "int",
        "action" => "string",
    ];
}
