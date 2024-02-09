<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property int|null $primary_area_of_study_id
 * @property string|null $description
 * @property int|null $award_level
 * @property string|null $type
 * @property Degree $degree
 * @api
 */
class AreaOfStudyOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","primary_area_of_study_id","description","award_level","type","degree"];
}
