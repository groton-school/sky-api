<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $id The Id of the area of study
 * @property ?string $declared_on From User Area of Study Reference
 * @property ?string $completed_on From User Area of Study Group
 * @property ?string $conferred_on From User Area of Study Group
 * @property ?float $credits_completed From User Area of Study Reference
 * @property ?float $credits_in_progress From User Area of Study Reference
 * @property ?float $credits_remaining From User Area of Study Reference
 * @property ?string $created_by The BBID of the user who created the area of
 *   study
 * @property ?string $modified_by The BBID of the user who last modified the
 *   area of study
 * @property ?string $created The date the area of study was created
 * @property ?string $modified The date the area of study was last modified
 * @property ?\Blackbaud\SKY\School\Components\AreaOfStudyOutputModel[]
 *   $requirement_set
 * @property ?\Blackbaud\SKY\School\Components\UserAreaOfStudyReferenceOutputModel[]
 *   $majors
 * @property ?\Blackbaud\SKY\School\Components\UserAreaOfStudyReferenceOutputModel[]
 *   $minors
 * @property ?\Blackbaud\SKY\School\Components\UserAreaOfStudyReferenceOutputModel[]
 *   $concentrations
 *
 * @api
 */
class DegreeOutputModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "declared_on",
        "completed_on",
        "conferred_on",
        "credits_completed",
        "credits_in_progress",
        "credits_remaining",
        "created_by",
        "modified_by",
        "created",
        "modified",
        "requirement_set",
        "majors",
        "minors",
        "concentrations",
    ];
}
