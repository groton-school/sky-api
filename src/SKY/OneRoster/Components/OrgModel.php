<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $name
 * @property ?string $type
 * @property ?string $identifier
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $parent
 * @property ?\Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $children
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?string[] $metadata
 *
 * @api
 */
class OrgModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "type" => "string",
        "identifier" => "string",
        "parent" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "children" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "string[]",
    ];
}
