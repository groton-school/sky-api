<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medical allergy
 *
 * @property int $id The ID of student medical allergy
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $allergy 
 * @property string | null $date_as_of The start date for the allergy.
 * @property string | null $date_until The end date for the allergy.
 * @property string | null $notes The notes for the allergy.
 * @property string | null $allergy_signs The signs of an allergic reaction.
 * @property string | null $minor_reaction_response The response for a minor
 *   allergic reaction.
 * @property string | null $major_reaction_response The response for a major
 *   allergic reaction.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\StudentMedication[] |
 *   null $student_medications An array of student medication objects.
 *
 * @api
 */
class StudentAllergiesView extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","allergy","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","student_medications"];
}
