<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $schoolYear
 * @property ?string $courseCode
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $org
 * @property ?string[] $subjectCodes
 * @property ?\Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $resources
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class CourseModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "schoolYear" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "courseCode" => "string",
        "grades" => "string[]",
        "subjects" => "string[]",
        "org" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "subjectCodes" => "string[]",
        "resources" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
