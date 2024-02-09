<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $name
 * @property bool|null $in_use
 * @api
 */
class OpponentFlyweight extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","in_use"];
}
