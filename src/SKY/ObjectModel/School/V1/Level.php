<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Level Model
*
* @property int|null $id
* @property string|null $abbreviation
* @property string|null $name
@api
*/
class Level extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","abbreviation","name"];
}
