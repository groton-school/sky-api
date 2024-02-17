<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $building_id
 * @property bool $is_admin
 * @property bool $is_head
 * @property int $owner_type
 * @property string $resident_from_date
 * @property int $room_id
 * @property int $section_id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $nick_name
 * @property string $prefix
 * @property string $suffix
 * @property string $middle_name
 * @property string $display
 * @property string $date_of_birth
 * @property \Blackbaud\SKY\School\Objects\DormStudentInfo[] $student_info
 *
 * @api
 */
class Resident extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "building_id",
        "is_admin",
        "is_head",
        "owner_type",
        "resident_from_date",
        "room_id",
        "section_id",
        "user_id",
        "first_name",
        "last_name",
        "nick_name",
        "prefix",
        "suffix",
        "middle_name",
        "display",
        "date_of_birth",
        "student_info",
    ];
}
