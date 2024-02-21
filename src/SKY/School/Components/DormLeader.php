<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $building_id
 * @property ?string $display_name
 * @property ?bool $is_admin
 * @property ?bool $is_head
 * @property ?int $owner_type
 * @property ?string $resident_from_date
 * @property ?int $room_id
 * @property ?int $section_id
 * @property ?int $user_id
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?string $maiden_name
 * @property ?string $prefix
 * @property ?string $suffix
 * @property ?string $middle_name
 * @property ?string $display
 * @property ?string $date_of_birth
 *
 * @api
 */
class DormLeader extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "building_id",
        "display_name",
        "is_admin",
        "is_head",
        "owner_type",
        "resident_from_date",
        "room_id",
        "section_id",
        "user_id",
        "first_name",
        "last_name",
        "maiden_name",
        "prefix",
        "suffix",
        "middle_name",
        "display",
        "date_of_birth",
    ];
}
