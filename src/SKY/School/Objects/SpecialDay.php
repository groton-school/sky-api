<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id 
 * @property string | null $day_description 
 * @property int | null $sort_order 
 * @property string | null $rotation_behavior 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\SpecialDayBlock[] |
 *   null $blocks 
 *
 * @api
 */
class SpecialDay extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","day_description","sort_order","rotation_behavior","blocks"];
}
