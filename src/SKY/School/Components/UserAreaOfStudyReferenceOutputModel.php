<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id
 * @property ?string $declared_on
 * @property ?int $area_of_study_id
 * @property \Blackbaud\SKY\School\Components\UserMajorMinorConcentrationOutputModel
 *   $requirement_set
 * @property \Blackbaud\SKY\School\Components\UserAreaOfStudyReferenceOutputModel
 *   $concentrations
 *
 * @api
 */
class UserAreaOfStudyReferenceOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "declared_on" => "string",
        "area_of_study_id" => "int",
        "requirement_set" => "\Blackbaud\SKY\School\Components\UserMajorMinorConcentrationOutputModel",
        "concentrations" => "\Blackbaud\SKY\School\Components\UserAreaOfStudyReferenceOutputModel",
    ];
}
