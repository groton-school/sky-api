<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Year Model
 *
 * @property int|null $id
 * @property string|null $begin_date
 * @property bool|null $current_year
 * @property string|null $end_date
 * @property bool|null $published
 * @property string|null $school_year_label
 * @api
 */
class Year extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","current_year","end_date","published","school_year_label"];
}
