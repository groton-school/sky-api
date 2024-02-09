<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $id
* @property int $phone_type_id
@api
*/
class PhoneShare extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","phone_type_id"];
}
