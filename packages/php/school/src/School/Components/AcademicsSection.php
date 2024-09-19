<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Academics Section Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Teacher[] $teachers The list of
 *   teachers for this section
 * @property ?\Blackbaud\SKY\School\Components\CustumFieldReadModel[]
 *   $custom_fields The list of custom fields for the section
 * @property int $id The ID of the section
 * @property ?string $course_code The identifier used to reference a course;
 *   the Course Code is a user-entered value
 * @property \Blackbaud\SKY\School\Components\Duration $duration An object
 *   describing the term or season for the section
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
class AcademicsSection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "teachers" => "\Blackbaud\SKY\School\Components\Teacher[]",
        "custom_fields" => "\Blackbaud\SKY\School\Components\CustumFieldReadModel[]",
        "id" => "int",
        "course_code" => "string",
        "duration" => "\Blackbaud\SKY\School\Components\Duration",
        "lead_section_id" => "int",
        "name" => "string",
        "offering_id" => "int",
        "parent_section_id" => "int",
        "room_id" => "int",
        "school_year" => "string",
        "section_identifier" => "string",
    ];
}
