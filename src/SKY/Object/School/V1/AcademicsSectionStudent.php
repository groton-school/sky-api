<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student Academic Section Model
 *
 * @property int $section_id
 * @property string|null $section_display_name
 * @property string|null $school_level_name
 * @property string|null $room_name
 * @property string|null $block_name
 * @property int|null $lead_section_id
 * @property int|null $marking_period_id
 * @property int|null $duration_id
 * @property double|null $cumulative_grade
 * @api
 */
class AcademicsSectionStudent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","section_display_name","school_level_name","room_name","block_name","lead_section_id","marking_period_id","duration_id","cumulative_grade"];
}
