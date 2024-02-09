<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Advisor Model
*
* @property int|null $id
* @property bool|null $head
* @property string|null $name
@api
*/
class Advisor extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name"];
}
