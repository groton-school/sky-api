<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $declared_on
 * @property int $area_of_study_id
 * @property \Blackbaud\SKY\School\Objects\UserMajorMinorConcentrationOutputModel
 *   $requirement_set
 * @property \Blackbaud\SKY\School\Objects\UserAreaOfStudyReferenceOutputModel
 *   $concentrations
 *
 * @api
 */
class UserAreaOfStudyReferenceOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "declared_on",
        "area_of_study_id",
        "requirement_set",
        "concentrations",
    ];
}
