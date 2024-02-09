<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Role Model
*
* @property int|null $id
* @property int|null $base_role_id
* @property bool|null $hidden
* @property string|null $name
@api
*/
class Role extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","base_role_id","hidden","name"];
}
