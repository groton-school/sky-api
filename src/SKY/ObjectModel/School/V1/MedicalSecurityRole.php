<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $role_id
* @property bool|null $has_access
@api
*/
class MedicalSecurityRole extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["role_id","has_access"];
}
