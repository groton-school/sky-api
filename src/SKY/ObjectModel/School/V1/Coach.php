<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $id
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $title
* @property string|null $preferred_name
@api
*/
class Coach extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","first_name","last_name","title","preferred_name"];
}
