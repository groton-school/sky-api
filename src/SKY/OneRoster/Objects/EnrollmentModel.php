<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel $user 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel $class
 *   
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $school 
 * @property string | null $role 
 * @property bool | null $primary 
 * @property string | null $beginDate 
 * @property string | null $endDate 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class EnrollmentModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user","class","school","role","primary","beginDate","endDate","sourcedId","status","dateLastModified","metadata"];
}
