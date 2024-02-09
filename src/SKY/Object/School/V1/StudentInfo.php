<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * StudentInfo Model
 *
 * @property int $grade_id
 * @property int $grade_level_id
 * @property string|null $grad_year
 * @property string|null $grade_level
 * @property string|null $grade_level_description
 * @property string|null $grade_level_abbreviation
 * @property string|null $grade_level_name
 * @api
 */
class StudentInfo extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["grade_id","grade_level_id","grad_year","grade_level","grade_level_description","grade_level_abbreviation","grade_level_name"];
}
