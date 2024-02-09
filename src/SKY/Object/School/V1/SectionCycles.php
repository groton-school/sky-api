<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $section_id
 * @property string|null $course_title
 * @property string|null $section_identifier
 * @property string|null $block_name
 * @property string|null $course_code
 * @property Cycle[]|null $cycles
 * @api
 */
class SectionCycles extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","course_title","section_identifier","block_name","course_code","cycles"];
}
