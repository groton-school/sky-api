<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\Constituent[]
 *   $value
 *
 * @api
 */
class ConstituentByFundCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\Constituent[]",
    ];
}
