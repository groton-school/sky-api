<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $offering_id
 * @property int $course_length
 * @property string $course_code
 * @property string $course_title
 * @property string $course_description
 * @property bool $inactive
 * @property int $level_num
 * @property string $block_type_id
 * @property int $room_type_id
 * @property int $room_id
 * @property int $building_id
 * @property float $credits
 *
 * @api
 */
class Course extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "offering_id",
        "course_length",
        "course_code",
        "course_title",
        "course_description",
        "inactive",
        "level_num",
        "block_type_id",
        "room_type_id",
        "room_id",
        "building_id",
        "credits",
    ];
}
