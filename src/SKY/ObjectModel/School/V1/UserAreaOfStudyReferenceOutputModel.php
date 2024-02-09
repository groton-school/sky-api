<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property string|null $declared_on
* @property int|null $area_of_study_id
* @property UserMajorMinorConcentrationOutputModel $requirement_set
* @property UserAreaOfStudyReferenceOutputModel $concentrations
@api
*/
class UserAreaOfStudyReferenceOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","declared_on","area_of_study_id","requirement_set","concentrations"];
}
