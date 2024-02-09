<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Academics Section Model
 *
 * @property Teacher[]|null $teachers
 * @property int $id
 * @property string|null $course_code
 * @property Duration $duration Duration Model
 * @property int|null $lead_section_id
 * @property string|null $name
 * @property int|null $offering_id
 * @property int|null $parent_section_id
 * @property int|null $room_id
 * @property string|null $school_year
 * @property string|null $section_identifier
 * @api
 */
class AcademicsSection extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["teachers","id","course_code","duration","lead_section_id","name","offering_id","parent_section_id","room_id","school_year","section_identifier"];
}
