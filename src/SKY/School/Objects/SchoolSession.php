<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The Id of the session
 * @property string | null $name The name of the session
 * @property string | null $school_year_label The school year the session
 *   takes place
 * @property int | null $school_year_id The id of the school year
 * @property int | null $level_num The school level number where the session
 *   takes place
 * @property string | null $begin_date The start date of the session
 * @property string | null $end_date The end date of the session
 * @property bool | null $current Returns true if the session is the current
 *   session
 * @property bool | null $in_use Returns true if the session is currently in
 *   use
 *
 * @api
 */
class SchoolSession extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","school_year_label","school_year_id","level_num","begin_date","end_date","current","in_use"];
}
