<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * User Defined Table
 *
 * @property int|null $table_id
 * @property string|null $table_name
 * @property bool|null $use_abbreviations
 * @property bool|null $in_use
 * @property bool|null $base_table
 * @property bool|null $system_table
 * @property bool|null $require_abbreviation
 * @property string|null $modify_user
 * @property int|null $vendor_id
 * @property UserDefinedTableValue[]|null $values
 * @api
 */
class UserDefinedTable extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["table_id","table_name","use_abbreviations","in_use","base_table","system_table","require_abbreviation","modify_user","vendor_id","values"];
}
