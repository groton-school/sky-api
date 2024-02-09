<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Duration Model
 *
 * @property int $id
 * @property string|null $name
 * @api
 */
class Duration extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
