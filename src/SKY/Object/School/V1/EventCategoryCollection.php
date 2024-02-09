<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * A Collection
 *
 * @property int $count
 * @property string|null $next_link
 * @property EventCategory[]|null $value
 * @api
 */
class EventCategoryCollection extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["count","next_link","value"];
}
