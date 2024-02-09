<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Team Model
 *
 * @property int $id
 * @property string|null $name
 * @property Sport $sport Sports Model
 * @api
 */
class Team extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","sport"];
}
