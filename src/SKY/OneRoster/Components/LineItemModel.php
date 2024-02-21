<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $description
 * @property ?string $assignDate
 * @property ?string $dueDate
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $class
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $category
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $gradingPeriod
 * @property ?float $resultValueMin
 * @property ?float $resultValueMax
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?string[] $metadata
 *
 * @api
 */
class LineItemModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "description" => "string",
        "assignDate" => "string",
        "dueDate" => "string",
        "class" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "category" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "gradingPeriod" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "resultValueMin" => "float",
        "resultValueMax" => "float",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "string[]",
    ];
}
