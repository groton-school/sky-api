<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medical allergy/condition
 *
 * @property int $id The ID of student medical allergy/conditon
 * @property ?string $type Medical type
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField
 *   $allergy_condition_type
 * @property ?string $date_as_of The date the allergy or condition began. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date the allergy or condition ended. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $notes The notes for a allergy/condition
 * @property ?string $allergy_signs The signs of an allergic reaction
 * @property ?string $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property ?string $major_reaction_response The response for a major
 *   allergic reaction
 * @property ?\Blackbaud\SKY\School\Components\StudentMedicationRead[]
 *   $medications Collection of medicines
 *
 * @api
 */
class AllergiesAndConditionsView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "type" => "string",
        "allergy_condition_type" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
        "date_as_of" => "string",
        "date_until" => "string",
        "notes" => "string",
        "allergy_signs" => "string",
        "minor_reaction_response" => "string",
        "major_reaction_response" => "string",
        "medications" => "\Blackbaud\SKY\School\Components\StudentMedicationRead[]",
    ];
}
