<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\CategoryModel
 *   $category 
 *
 * @api
 */
class CategoryInputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["category"];
}
