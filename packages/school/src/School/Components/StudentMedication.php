<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object for student medication information
 *
 * @property int $id The ID of the student’s medication
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $medication
 * @property ?string $date_as_of The start date for the medication.
 * @property ?string $date_until The end date for the medication.
 *
 * @api
 */
class StudentMedication extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "medication" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
        "date_as_of" => "string",
        "date_until" => "string",
    ];
}
