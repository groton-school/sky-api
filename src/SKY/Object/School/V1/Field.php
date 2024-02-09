<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * List Field
 *
 * @property string|null $name
 * @property string|null $value
 * @api
 */
class Field extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["name","value"];
}
