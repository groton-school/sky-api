<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id 
 * @property string | null $declared_on 
 * @property int | null $area_of_study_id 
 * @property
 *   \GrotonSchool\Blackbaud\SKY\School\Objects\UserMajorMinorConcentrationOutputModel
 *   $requirement_set 
 * @property
 *   \GrotonSchool\Blackbaud\SKY\School\Objects\UserAreaOfStudyReferenceOutputModel
 *   $concentrations 
 *
 * @api
 */
class UserAreaOfStudyReferenceOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","declared_on","area_of_study_id","requirement_set","concentrations"];
}
