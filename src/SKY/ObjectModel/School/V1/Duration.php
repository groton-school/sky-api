<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Duration Model
*
* @property int $id
* @property string|null $name
@api
*/
class Duration extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
