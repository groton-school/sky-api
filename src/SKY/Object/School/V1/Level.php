<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Level Model
 *
 * @property int|null $id
 * @property string|null $abbreviation
 * @property string|null $name
 * @api
 */
class Level extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","abbreviation","name"];
}
