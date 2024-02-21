<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medical allergy
 *
 * @property int $id The ID of student medical allergy
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $allergy
 * @property ?string $date_as_of The start date for the allergy.
 * @property ?string $date_until The end date for the allergy.
 * @property ?string $notes The notes for the allergy.
 * @property ?string $allergy_signs The signs of an allergic reaction.
 * @property ?string $minor_reaction_response The response for a minor
 *   allergic reaction.
 * @property ?string $major_reaction_response The response for a major
 *   allergic reaction.
 * @property ?\Blackbaud\SKY\School\Components\StudentMedication[]
 *   $student_medications An array of student medication objects.
 *
 * @api
 */
class StudentAllergiesView extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "allergy",
        "date_as_of",
        "date_until",
        "notes",
        "allergy_signs",
        "minor_reaction_response",
        "major_reaction_response",
        "student_medications",
    ];
}
