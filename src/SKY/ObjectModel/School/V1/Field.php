<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* List Field
*
* @property string|null $name
* @property string|null $value
@api
*/
class Field extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["name","value"];
}
