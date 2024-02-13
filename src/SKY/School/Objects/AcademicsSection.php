<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Academics Section Model
 *
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Teacher[] | null
 *   $teachers The list of teachers for this section
 * @property int $id The ID of the section
 * @property string | null $course_code The identifier used to reference a
 *   course; the Course Code is a user-entered value
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Duration $duration
 *   Duration Model
 * @property int | null $lead_section_id The ID of the first section in a
 *   series of terms
 * @property string | null $name The name of the section
 * @property int | null $offering_id The ID of an offered course
 * @property int | null $parent_section_id The ID that leads you back to the
 *   offered section
 * @property int | null $room_id The ID of the room the section is held in
 * @property string | null $school_year The school year date range in which
 *   the section occurs
 * @property string | null $section_identifier The identifier used to
 *   differentiate between multiple sections that contain a course; the
 *   Section Identifier is a user-entered value
 *
 * @api
 */
class AcademicsSection extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["teachers","id","course_code","duration","lead_section_id","name","offering_id","parent_section_id","room_id","school_year","section_identifier"];
}
