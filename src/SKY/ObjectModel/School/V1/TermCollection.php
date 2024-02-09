<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* A Collection
*
* @property int $count
* @property string|null $next_link
* @property Term[]|null $value
@api
*/
class TermCollection extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["count","next_link","value"];
}
