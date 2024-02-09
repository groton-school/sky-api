<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Sports Model
 *
 * @property int $id
 * @property Level $level Level Model
 * @property string|null $name
 * @property Season $season Season Model
 * @api
 */
class Sport extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","level","name","season"];
}
