<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $day_description
 * @property int $sort_order
 * @property string $rotation_behavior
 * @property \Blackbaud\SKY\School\Objects\SpecialDayBlock[] $blocks
 *
 * @api
 */
class SpecialDay extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "day_description",
        "sort_order",
        "rotation_behavior",
        "blocks",
    ];
}
