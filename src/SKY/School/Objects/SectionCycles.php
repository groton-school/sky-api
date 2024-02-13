<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $section_id The ID of the section
 * @property string | null $course_title The name of the course
 * @property string | null $section_identifier The section identifier
 * @property string | null $block_name Name of the block to which this section
 *   belongs
 * @property string | null $course_code The course code
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Cycle[] | null $cycles
 *   The collection of cycles for the section
 *
 * @api
 */
class SectionCycles extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","course_title","section_identifier","block_name","course_code","cycles"];
}
