<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\Relationship[]
 *   $value
 *
 * @api
 */
class RelationshipCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\Relationship[]",
    ];
}
