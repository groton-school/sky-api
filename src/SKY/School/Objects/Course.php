<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $offering_id 
 * @property int | null $course_length 
 * @property string | null $course_code 
 * @property string | null $course_title 
 * @property string | null $course_description 
 * @property bool $inactive 
 * @property int | null $level_num 
 * @property string | null $block_type_id 
 * @property int | null $room_type_id 
 * @property int | null $room_id 
 * @property int | null $building_id 
 * @property float | null $credits 
 *
 * @api
 */
class Course extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["offering_id","course_length","course_code","course_title","course_description","inactive","level_num","block_type_id","room_type_id","room_id","building_id","credits"];
}
