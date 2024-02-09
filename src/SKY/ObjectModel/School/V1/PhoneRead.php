<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* PhoneRead Model
*
* @property int $id
* @property string|null $phone_type
* @property int|null $index_id
* @property PhoneTypeLink[]|null $links
* @property string|null $number
* @property int|null $type_id
* @property int|null $user_id
@api
*/
class PhoneRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","phone_type","index_id","links","number","type_id","user_id"];
}
