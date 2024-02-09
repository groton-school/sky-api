<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ClassModel $class
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class ClassOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["class","statusInfoSet"];
}
