<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $student_user_id
 * @property string|null $begin_date
 * @property string|null $end_date
 * @property string|null $start_time
 * @property string|null $end_time
 * @property int|null $excuse_type_id
 * @property string|null $excuse_comment
 * @api
 */
class AttendanceCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["student_user_id","begin_date","end_date","start_time","end_time","excuse_type_id","excuse_comment"];
}
