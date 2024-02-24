<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $user
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $class_
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $school
 * @property ?string $role
 * @property ?bool $primary
 * @property ?string $beginDate
 * @property ?string $endDate
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class EnrollmentModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "class" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "school" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "role" => "string",
        "primary" => "bool",
        "beginDate" => "string",
        "endDate" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
