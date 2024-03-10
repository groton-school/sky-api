<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property string $id
 * @property string $description
 * @property int $sequence
 *
 * @api
 */
class CodeTableEntry extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "description" => "string",
        "sequence" => "int",
    ];
}
