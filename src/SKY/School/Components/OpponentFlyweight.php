<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $id ID ofthe opponent
 * @property ?string $name Name of the opponent
 * @property ?bool $in_use indicates of the opponent is currently being used
 *
 * @api
 */
class OpponentFlyweight extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "in_use",
    ];
}
