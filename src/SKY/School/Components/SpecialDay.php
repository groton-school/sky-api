<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id
 * @property ?string $day_description
 * @property ?int $sort_order
 * @property ?string $rotation_behavior
 * @property ?\Blackbaud\SKY\School\Components\SpecialDayBlock[] $blocks
 *
 * @api
 */
class SpecialDay extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "day_description" => "string",
        "sort_order" => "int",
        "rotation_behavior" => "string",
        "blocks" => "\Blackbaud\SKY\School\Components\SpecialDayBlock[]",
    ];
}
