<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $title
 * @property GuidRefModel $schoolYear
 * @property string|null $courseCode
 * @property _string|null $grades
 * @property _string|null $subjects
 * @property GuidRefModel $org
 * @property _string|null $subjectCodes
 * @property GuidRefModel[]|null $resources
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class CourseModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["title","schoolYear","courseCode","grades","subjects","org","subjectCodes","resources","sourcedId","status","dateLastModified","metadata"];
}
