<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $title
 * @property string $classCode
 * @property string $classType
 * @property string $location
 * @property string[] $grades
 * @property string[] $subjects
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $course
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $school
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $terms
 * @property string[] $subjectCodes
 * @property string[] $periods
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $resources
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property string[] $metadata
 *
 * @api
 */
class ClassModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "title",
        "classCode",
        "classType",
        "location",
        "grades",
        "subjects",
        "course",
        "school",
        "terms",
        "subjectCodes",
        "periods",
        "resources",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
