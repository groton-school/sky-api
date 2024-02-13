<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The Id of the area of study
 * @property int | null $primary_area_of_study_id 
 * @property string | null $description The long description of the area of
 *   study
 * @property int | null $award_level The designated award level for this area
 *   of study
 * @property string | null $type 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Degree $degree 
 *
 * @api
 */
class AreaOfStudyOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","primary_area_of_study_id","description","award_level","type","degree"];
}
