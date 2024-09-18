<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $offering_id The Offering Id of the Offering
 * @property ?int $course_length The length of the offering in terms
 * @property ?string $course_code The course code for the offering
 * @property ?string $course_title The name of the offering
 * @property ?string $course_description The description of the offering
 * @property bool $inactive
 * @property ?int $level_num
 * @property null|"Homeroom"|"Academic"|"Lunch"|"Double"|"NonAcademic"
 *   $block_type_id
 * @property ?int $room_type_id
 * @property ?int $room_id
 * @property ?int $building_id
 * @property ?float $credits The credits for the offering
 * @property ?\Blackbaud\SKY\School\Components\CustumFieldReadModel[]
 *   $custom_fields
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
        "custom_fields" => "\Blackbaud\SKY\School\Components\CustumFieldReadModel[]",
    ];
}
