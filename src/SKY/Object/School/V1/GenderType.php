<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property int|null $gender_type_id
 * @property string|null $code
 * @property string|null $description
 * @property bool|null $active
 * @property int|null $sort_order
 * @property string|null $pronouns
 * @api
 */
class GenderType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","gender_type_id","code","description","active","sort_order","pronouns"];
}
