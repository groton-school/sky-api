<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id The Id of the area of study
 * @property ?int $primary_area_of_study_id
 * @property ?string $description The long description of the area of study
 * @property ?int $award_level The designated award level for this area of
 *   study
 * @property ?string $type
 * @property \Blackbaud\SKY\School\Components\Degree $degree
 *
 * @api
 */
class AreaOfStudyOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "primary_area_of_study_id" => "int",
        "description" => "string",
        "award_level" => "int",
        "type" => "string",
        "degree" => "\Blackbaud\SKY\School\Components\Degree",
    ];
}
