<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of appeal list entries.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\Appeal[] $value
 *
 * @api
 */
class AppealCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\Appeal[]",
    ];
}
