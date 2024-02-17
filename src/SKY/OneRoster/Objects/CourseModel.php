<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $title
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $schoolYear
 * @property string $courseCode
 * @property string[] $grades
 * @property string[] $subjects
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $org
 * @property string[] $subjectCodes
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $resources
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property string[] $metadata
 *
 * @api
 */
class CourseModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "title",
        "schoolYear",
        "courseCode",
        "grades",
        "subjects",
        "org",
        "subjectCodes",
        "resources",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
