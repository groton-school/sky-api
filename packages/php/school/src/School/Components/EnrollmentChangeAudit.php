<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $section_id The Id of the section
 * @property ?string $course_code The course code
 * @property ?string $section_name The name of the section
 * @property ?string $modified_date_time The date/tim the change was made
 * @property ?int $modified_by the Id of the user who modified the enrollment
 *   record
 * @property ?string $action The action that was taken. Values can ve either
 *   Inserted, Updated, or Deleted
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
