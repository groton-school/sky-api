<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $count
 * @property \Blackbaud\SKY\Altru\Administration\Components\SimpleListrows[]
 *   $rows
 *
 * @api
 */
class SimpleListLoad extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "rows" => "\Blackbaud\SKY\Altru\Administration\Components\SimpleListrows[]",
    ];
}
