<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Sports Model
*
* @property int $id
* @property Level $level Level Model
* @property string|null $name
* @property Season $season Season Model
@api
*/
class Sport extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","level","name","season"];
}
