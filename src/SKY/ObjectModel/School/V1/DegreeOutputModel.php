<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property string|null $declared_on
* @property string|null $completed_on
* @property string|null $conferred_on
* @property double|null $credits_completed
* @property double|null $credits_in_progress
* @property double|null $credits_remaining
* @property string|null $created_by
* @property string|null $modified_by
* @property string|null $created
* @property string|null $modified
* @property AreaOfStudyOutputModel[]|null $requirement_set
* @property UserAreaOfStudyReferenceOutputModel[]|null $majors
* @property UserAreaOfStudyReferenceOutputModel[]|null $minors
* @property UserAreaOfStudyReferenceOutputModel[]|null $concentrations
@api
*/
class DegreeOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","declared_on","completed_on","conferred_on","credits_completed","credits_in_progress","credits_remaining","created_by","modified_by","created","modified","requirement_set","majors","minors","concentrations"];
}
