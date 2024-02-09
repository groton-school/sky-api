<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* GradeLevel Model
*
* @property int|null $id
* @property bool|null $active
* @property string|null $description
* @property string|null $abbreviation
* @property string|null $name
* @property int|null $promote_to_code
@api
*/
class GradeLevel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","active","description","abbreviation","name","promote_to_code"];
}
