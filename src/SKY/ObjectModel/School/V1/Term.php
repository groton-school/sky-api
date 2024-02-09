<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Term Model
*
* @property int|null $id
* @property string|null $begin_date
* @property string|null $description
* @property string|null $end_date
* @property string|null $level_description
* @property int|null $level_id
* @property int|null $offering_type
* @property string|null $school_year_label
@api
*/
class Term extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","description","end_date","level_description","level_id","offering_type","school_year_label"];
}
