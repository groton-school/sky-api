<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentConstituenciesDisplayOrder
 *
 * @property string $id id
 * @property string $description description
 * @property int $sequence sequence
 * @property bool $system issystem
 *
 * @api
 */
class ConstituentConstituenciesDisplayOrder extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "description" => "string",
        "sequence" => "int",
        "system" => "bool",
    ];
}
