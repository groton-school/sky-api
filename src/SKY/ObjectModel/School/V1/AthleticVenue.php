<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property string|null $name
@api
*/
class AthleticVenue extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
