<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property
 *   GrotonSchool\Blackbaud\SKY\OneRoster\Objects\AcademicSessionModel[] |
 *   null $academicSessions 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class AcademicSessionsOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["academicSessions","statusInfoSet"];
}
