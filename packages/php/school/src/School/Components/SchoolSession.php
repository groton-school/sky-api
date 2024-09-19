<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id The Id of the session
 * @property ?string $name The name of the session
 * @property ?string $school_year_label The school year the session takes
 *   place
 * @property ?int $school_year_id The id of the school year
 * @property ?int $level_num The school level number where the session takes
 *   place
 * @property ?string $begin_date The start date of the session
 * @property ?string $end_date The end date of the session
 * @property ?bool $current Returns true if the session is the current session
 * @property ?bool $in_use Returns true if the session is currently in use
 *
 * @api
 */
class SchoolSession extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "school_year_label" => "string",
        "school_year_id" => "int",
        "level_num" => "int",
        "begin_date" => "string",
        "end_date" => "string",
        "current" => "bool",
        "in_use" => "bool",
    ];
}
