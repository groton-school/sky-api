<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student allergy update
 *
 * @property string $date_as_of The date the allergy began. Use format ...
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property string $date_until The date the allergy ended. Use format ...
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property string $notes The notes for the allergy
 * @property string $allergy_signs The signs of an allergic reaction
 * @property string $minor_reaction_response The response for a minor allergic
 *   reaction
 * @property string $major_reaction_response The response for a major allergic
 *   reaction
 * @property \Blackbaud\SKY\School\Components\MedicalSecurityRole[]
 *   $role_access Array of roles. If a role is not included, default access will
 *   be set to true
 * @property \int[] $medications The list of student medication IDs for the
 *   allergy. If included, this list will replace the existing list of
 *   medications.
 *
 * @api
 */
class StudentAllergyUpdate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "date_as_of",
        "date_until",
        "notes",
        "allergy_signs",
        "minor_reaction_response",
        "major_reaction_response",
        "role_access",
        "medications",
    ];
}
