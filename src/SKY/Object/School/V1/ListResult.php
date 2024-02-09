<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * List Collection
 *
 * @property int $count
 * @property int $page
 * @property List $results List Model
 * @api
 */
class ListResult extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["count","page","results"];
}
