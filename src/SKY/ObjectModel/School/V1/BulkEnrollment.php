<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Model to define bulk enrollments for both students and teachers
*
* @property int $id
* @property string $enrollment_date
* @property string $section_ids
* @property string $user_ids
@api
*/
class BulkEnrollment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","enrollment_date","section_ids","user_ids"];
}
