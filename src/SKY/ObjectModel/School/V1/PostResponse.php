<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property bool $value
@api
*/
class PostResponse extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["value"];
}
