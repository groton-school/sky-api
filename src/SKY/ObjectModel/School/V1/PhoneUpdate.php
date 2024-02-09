<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* PhoneUpdate Model
*
* @property string|null $number
* @property int|null $type_id
@api
*/
class PhoneUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","type_id"];
}
