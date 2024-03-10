<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Describes a collection of gift tribute acknowledgees.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgee[]
 *   $value
 *
 * @api
 */
class GiftTributeAcknowledgeeCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgee[]",
    ];
}
