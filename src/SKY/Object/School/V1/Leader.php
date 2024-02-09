<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Leader Model
 *
 * @property int|null $id
 * @property bool|null $head
 * @property string|null $name
 * @api
 */
class Leader extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name"];
}
