<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $classCode
 * @property ?string $classType
 * @property ?string $location
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $course
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $school
 * @property ?\Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $terms
 * @property ?string[] $subjectCodes
 * @property ?string[] $periods
 * @property ?\Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $resources
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class ClassModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "classCode" => "string",
        "classType" => "string",
        "location" => "string",
        "grades" => "string[]",
        "subjects" => "string[]",
        "course" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "school" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "terms" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel[]",
        "subjectCodes" => "string[]",
        "periods" => "string[]",
        "resources" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
