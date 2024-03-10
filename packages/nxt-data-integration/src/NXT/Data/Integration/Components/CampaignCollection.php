<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of campaign list entries.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\Campaign[] $value
 *
 * @api
 */
class CampaignCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\Campaign[]",
    ];
}
