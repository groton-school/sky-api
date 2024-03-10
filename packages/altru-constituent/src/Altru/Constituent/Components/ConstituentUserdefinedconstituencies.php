<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentUserdefinedconstituencies
 *
 * @property string $description description
 * @property int $sequence sequence
 *
 * @api
 */
class ConstituentUserdefinedconstituencies extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "description" => "string",
        "sequence" => "int",
    ];
}
