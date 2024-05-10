<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentUserDefinedConstituencies
 *
 * @property string $description description
 * @property int $sequence sequence
 *
 * @api
 */
class ConstituentUserDefinedConstituencies extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "description" => "string",
        "sequence" => "int",
    ];
}
