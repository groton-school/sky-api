<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of tribute acknowledgees.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgee[]
 *   $value
 *
 * @api
 */
class TributeAcknowledgeeCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgee[]",
    ];
}
