<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Candidate Create
 *
 * @property int $user_id ID for the user to be added as a candidate.
 * @property string $entering_year The year for which the user is a candidate
 * @property int $entering_grade_id The ID for the grade in which the
 *   candidate is entering
 * @property int $checklist_id ID of the checklist to be updated as part of
 *   candidates creation
 *
 * @api
 */
class CandidateCreate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "entering_year",
        "entering_grade_id",
        "checklist_id",
    ];
}
