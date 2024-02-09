<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Contains the audit information for a single field
*
* @property string|null $field_name
* @property string|null $change_date
* @property string|null $value_before
* @property string|null $value_after
* @property int|null $user_id
@api
*/
class UserAuditRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["field_name","change_date","value_before","value_after","user_id"];
}
