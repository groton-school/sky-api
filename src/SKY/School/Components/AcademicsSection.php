<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Academics Section Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Teacher[] $teachers The list of
 *   teachers for this section
 * @property int $id The ID of the section
 * @property ?string $course_code The identifier used to reference a course;
 *   the Course Code is a user-entered value
 * @property \Blackbaud\SKY\School\Components\Duration $duration Duration
 *   Model
 * @property ?int $lead_section_id The ID of the first section in a series of
 *   terms
 * @property ?string $name The name of the section
 * @property ?int $offering_id The ID of an offered course
 * @property ?int $parent_section_id The ID that leads you back to the offered
 *   section
 * @property ?int $room_id The ID of the room the section is held in
 * @property ?string $school_year The school year date range in which the
 *   section occurs
 * @property ?string $section_identifier The identifier used to differentiate
 *   between multiple sections that contain a course; the Section Identifier is
 *   a user-entered value
 *
 * @api
 */
class AcademicsSection extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "teachers",
        "id",
        "course_code",
        "duration",
        "lead_section_id",
        "name",
        "offering_id",
        "parent_section_id",
        "room_id",
        "school_year",
        "section_identifier",
    ];
}
