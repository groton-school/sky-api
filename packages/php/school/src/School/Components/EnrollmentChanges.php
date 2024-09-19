<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Enrollment Changes Model
 *
 * @property ?int $id The ID of the student
 * @property ?string $preferred_name
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?\Blackbaud\SKY\School\Components\EnrollmentChangeAudit[]
 *   $changes
 *
 * @api
 */
class EnrollmentChanges extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "preferred_name" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "changes" => "\Blackbaud\SKY\School\Components\EnrollmentChangeAudit[]",
    ];
}
