<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Row Model
 *
 * @property Field[]|null $columns
 * @api
 */
class Row extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["columns"];
}
