<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $day_description
 * @property int|null $sort_order
 * @property string|null $rotation_behavior
 * @property SpecialDayBlock[]|null $blocks
 * @api
 */
class SpecialDay extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","day_description","sort_order","rotation_behavior","blocks"];
}
