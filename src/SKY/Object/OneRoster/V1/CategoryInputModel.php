<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property CategoryModel $category
 * @api
 */
class CategoryInputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["category"];
}
