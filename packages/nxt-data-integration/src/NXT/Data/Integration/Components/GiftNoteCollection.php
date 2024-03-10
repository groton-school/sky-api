<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of gift note entries.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\GiftNote[] $value
 *
 * @api
 */
class GiftNoteCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\GiftNote[]",
    ];
}
