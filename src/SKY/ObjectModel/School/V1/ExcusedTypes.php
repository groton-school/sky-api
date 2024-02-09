<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $category_description
* @property int|null $category_id
* @property int|null $excuse_type_id
* @property string|null $excuse_description
* @property bool|null $use_in_calculations
* @property string|null $excused
* @property string|null $duration
* @property string|null $attendance_type
@api
*/
class ExcusedTypes extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["category_description","category_id","excuse_type_id","excuse_description","use_in_calculations","excused","duration","attendance_type"];
}
