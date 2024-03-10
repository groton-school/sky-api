<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Athletic requirement
 *
 * @property string $athletic_type The ID or description of the athletic
 *   requirement table value
 * @property ?string $athletic_date The date the requirement was met. Use
 *   ISO-8601 date format: 2022-08-31. Excluding a date here will clear the
 *   athletic requirements of the student.
 *
 * @api
 */
class StudentAthleticRequirement extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "athletic_type" => "string",
        "athletic_date" => "string",
    ];
}
