<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the area of study
 * @property int $primary_area_of_study_id
 * @property string $description The long description of the area of study
 * @property int $award_level The designated award level for this area of
 *   study
 * @property string $type
 * @property \Blackbaud\SKY\School\Components\Degree $degree
 *
 * @api
 */
class AreaOfStudyOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "primary_area_of_study_id",
        "description",
        "award_level",
        "type",
        "degree",
    ];
}
