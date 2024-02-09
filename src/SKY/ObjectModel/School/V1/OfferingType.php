<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* OfferingType Model
*
* @property int $id
* @property string|null $description
@api
*/
class OfferingType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description"];
}
