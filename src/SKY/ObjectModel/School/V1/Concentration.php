<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $id
* @property string|null $name
* @property string|null $abbreviation
@api
*/
class Concentration extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","abbreviation"];
}
