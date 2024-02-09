<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $name
 * @property string|null $school_year_label
 * @property int|null $school_year_id
 * @property int|null $level_num
 * @property string|null $begin_date
 * @property string|null $end_date
 * @property bool|null $current
 * @property bool|null $in_use
 * @api
 */
class SchoolSession extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","school_year_label","school_year_id","level_num","begin_date","end_date","current","in_use"];
}
