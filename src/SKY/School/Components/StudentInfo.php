<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * StudentInfo Model
 *
 * @property int $grade_id The Id of the Grade Level
 * @property int $grade_level_id The Id of the Grade Level
 * @property ?string $grad_year The graduation year of the student
 * @property ?string $grade_level The grade level of the student
 * @property ?string $grade_level_description The grade level description of
 *   the student
 * @property ?string $grade_level_abbreviation The grade level abbreviation of
 *   the student
 * @property ?string $grade_level_name The grade level name of the student
 *
 * @api
 */
class StudentInfo extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "grade_id" => "int",
        "grade_level_id" => "int",
        "grad_year" => "string",
        "grade_level" => "string",
        "grade_level_description" => "string",
        "grade_level_abbreviation" => "string",
        "grade_level_name" => "string",
    ];
}
