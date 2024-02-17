<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student Academic Section Model
 *
 * @property int $section_id The ID of the section
 * @property string $section_display_name The section display value (name and
 *   block)
 * @property string $school_level_name The name of the room where the section
 *   takes place
 * @property string $room_name The name of the room where the section takes
 *   place
 * @property string $block_name The name of the schedule block for this
 *   section
 * @property int $lead_section_id The ID of the first section in a series of
 *   terms
 * @property int $marking_period_id The ID of the marking period for this
 *   section
 * @property int $duration_id The duration ID for a section
 * @property double $cumulative_grade The cumulative grade for this section
 *   and student
 *
 * @api
 */
class AcademicsSectionStudent extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "section_id",
        "section_display_name",
        "school_level_name",
        "room_name",
        "block_name",
        "lead_section_id",
        "marking_period_id",
        "duration_id",
        "cumulative_grade",
    ];
}
