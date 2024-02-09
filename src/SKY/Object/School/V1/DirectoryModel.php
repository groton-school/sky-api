<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $name
 * @property int $sort
 * @api
 */
class DirectoryModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","sort"];
}
