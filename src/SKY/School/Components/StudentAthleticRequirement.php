<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Athletic requirement
 *
 * @property string $athletic_type The ID or description of the athletic
 *   requirement table value
 * @property ?string $athletic_date The date the requirement was met. Use
 *   ISO-8601 date format: 2022-08-31.
 * Excluding a date here will clear the athletic requirements of the student.
 *
 * @api
 */
class StudentAthleticRequirement extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "athletic_type",
        "athletic_date",
    ];
}
