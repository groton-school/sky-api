<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* UserAdminCustomField
*
* @property int|null $id
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $preferred_name
* @property CustomAdminField[]|null $custom_fields
@api
*/
class UserAdminCustomField extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","first_name","last_name","preferred_name","custom_fields"];
}
