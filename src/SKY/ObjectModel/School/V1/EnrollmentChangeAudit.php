<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $section_id
* @property string|null $course_code
* @property string|null $section_name
* @property string|null $modified_date_time
* @property int|null $modified_by
* @property string|null $action
@api
*/
class EnrollmentChangeAudit extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","course_code","section_name","modified_date_time","modified_by","action"];
}
