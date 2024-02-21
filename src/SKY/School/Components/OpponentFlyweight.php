<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id ID ofthe opponent
 * @property ?string $name Name of the opponent
 * @property ?bool $in_use indicates of the opponent is currently being used
 *
 * @api
 */
class OpponentFlyweight extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "in_use" => "bool",
    ];
}
