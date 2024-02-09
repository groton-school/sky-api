<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $cip_prefix
* @property string|null $cip_suffix
* @property int $id
* @property string|null $name
* @property string|null $abbreviation
@api
*/
class Major extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["cip_prefix","cip_suffix","id","name","abbreviation"];
}
