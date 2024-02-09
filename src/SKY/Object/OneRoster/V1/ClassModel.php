<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $title
 * @property string|null $classCode
 * @property string|null $classType
 * @property string|null $location
 * @property _string|null $grades
 * @property _string|null $subjects
 * @property GuidRefModel $course
 * @property GuidRefModel $school
 * @property GuidRefModel[]|null $terms
 * @property _string|null $subjectCodes
 * @property _string|null $periods
 * @property GuidRefModel[]|null $resources
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class ClassModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["title","classCode","classType","location","grades","subjects","course","school","terms","subjectCodes","periods","resources","sourcedId","status","dateLastModified","metadata"];
}
