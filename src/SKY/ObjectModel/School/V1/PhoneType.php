<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* PhoneType Model
*
* @property int $id
* @property string|null $type
@api
*/
class PhoneType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","type"];
}
