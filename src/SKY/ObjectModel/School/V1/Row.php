<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Row Model
*
* @property Field[]|null $columns
@api
*/
class Row extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["columns"];
}
