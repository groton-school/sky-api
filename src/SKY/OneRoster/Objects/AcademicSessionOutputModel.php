<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property
 *   \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\AcademicSessionModel
 *   $academicSession 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class AcademicSessionOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["academicSession","statusInfoSet"];
}
