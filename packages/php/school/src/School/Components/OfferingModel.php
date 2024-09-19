<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with offering information
 *
 * @property int $id The Id of the Offering
 * @property ?string $name The name of the offering
 * @property \Blackbaud\SKY\School\Components\OfferingType $type An object
 *   with offering type information
 * @property ?string $course_code The course code for the offering
 * @property ?string $description The description of the offering
 * @property ?int $length The length of the offering in terms
 * @property ?float $credits The credits for the offering
 * @property \Blackbaud\SKY\School\Components\Level $school_level An object
 *   with school level information
 * @property ?string $school_year The School year of the offering
 *
 * @api
 */
class OfferingModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "type" => "\Blackbaud\SKY\School\Components\OfferingType",
        "course_code" => "string",
        "description" => "string",
        "length" => "int",
        "credits" => "float",
        "school_level" => "\Blackbaud\SKY\School\Components\Level",
        "school_year" => "string",
    ];
}
