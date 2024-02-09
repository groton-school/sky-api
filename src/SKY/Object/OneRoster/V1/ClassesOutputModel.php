<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ClassModel[]|null $classes
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class ClassesOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["classes","statusInfoSet"];
}
