<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property CategoryModel[]|null $categories
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class CategoriesOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["categories","statusInfoSet"];
}
