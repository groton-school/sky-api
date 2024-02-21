<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $offering_id
 * @property ?int $course_length
 * @property ?string $course_code
 * @property ?string $course_title
 * @property ?string $course_description
 * @property bool $inactive
 * @property ?int $level_num
 * @property ?string $block_type_id
 * @property ?int $room_type_id
 * @property ?int $room_id
 * @property ?int $building_id
 * @property ?float $credits
 *
 * @api
 */
class Course extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "offering_id" => "int",
        "course_length" => "int",
        "course_code" => "string",
        "course_title" => "string",
        "course_description" => "string",
        "inactive" => "bool",
        "level_num" => "int",
        "block_type_id" => "string",
        "room_type_id" => "int",
        "room_id" => "int",
        "building_id" => "int",
        "credits" => "float",
    ];
}
