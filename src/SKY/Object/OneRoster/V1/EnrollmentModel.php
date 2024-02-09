<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property GuidRefModel $user
 * @property GuidRefModel $class
 * @property GuidRefModel $school
 * @property string|null $role
 * @property bool|null $primary
 * @property string|null $beginDate
 * @property string|null $endDate
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class EnrollmentModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user","class","school","role","primary","beginDate","endDate","sourcedId","status","dateLastModified","metadata"];
}
