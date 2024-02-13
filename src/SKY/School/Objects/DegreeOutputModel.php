<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The Id of the area of study
 * @property string | null $declared_on From User Area of Study Reference
 * @property string | null $completed_on From User Area of Study Group
 * @property string | null $conferred_on From User Area of Study Group
 * @property double | null $credits_completed From User Area of Study
 *   Reference
 * @property double | null $credits_in_progress From User Area of Study
 *   Reference
 * @property double | null $credits_remaining From User Area of Study
 *   Reference
 * @property string | null $created_by The BBID of the user who created the
 *   area of study
 * @property string | null $modified_by The BBID of the user who last modified
 *   the area of study
 * @property string | null $created The date the area of study was created
 * @property string | null $modified The date the area of study was last
 *   modified
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\AreaOfStudyOutputModel[] | null
 *   $requirement_set 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\UserAreaOfStudyReferenceOutputModel[]
 *   | null $majors 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\UserAreaOfStudyReferenceOutputModel[]
 *   | null $minors 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\UserAreaOfStudyReferenceOutputModel[]
 *   | null $concentrations 
 *
 * @api
 */
class DegreeOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","declared_on","completed_on","conferred_on","credits_completed","credits_in_progress","credits_remaining","created_by","modified_by","created","modified","requirement_set","majors","minors","concentrations"];
}
