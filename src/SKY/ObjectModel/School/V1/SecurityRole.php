<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Roles in the Education Management system that can see an allergy or condition
*
* @property int $id
* @property string|null $name
@api
*/
class SecurityRole extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
