<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $id
* @property string|null $message
@api
*/
class UserEnrollmentResponse extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","message"];
}
