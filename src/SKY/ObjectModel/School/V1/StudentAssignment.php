<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $section_name
* @property int|null $section_id
* @property int|null $assignment_id
* @property string|null $short_description
* @property string|null $date_assigned
* @property string|null $date_due
* @property string|null $long_description
* @property string|null $assignment_type
* @property bool $grade_book
* @property bool $online_submission
* @property int|null $assignment_status
* @property bool $assessment
* @property int|null $assessment_id
* @property bool $assessment_locked
* @property int|null $major
* @property bool $discussion
* @property bool $formative
* @property bool $exempt
* @property bool $incomplete
* @property bool $late
* @property bool $missing
* @property bool $rubric
* @property bool $user_task
@api
*/
class StudentAssignment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_name","section_id","assignment_id","short_description","date_assigned","date_due","long_description","assignment_type","grade_book","online_submission","assignment_status","assessment","assessment_id","assessment_locked","major","discussion","formative","exempt","incomplete","late","missing","rubric","user_task"];
}
