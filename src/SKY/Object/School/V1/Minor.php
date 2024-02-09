<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $name
 * @property string|null $abbreviation
 * @api
 */
class Minor extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","abbreviation"];
}
