<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $name
 * @api
 */
class AthleticVenue extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
