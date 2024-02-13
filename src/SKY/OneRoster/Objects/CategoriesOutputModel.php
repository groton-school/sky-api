<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\CategoryModel[] |
 *   null $categories 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class CategoriesOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["categories","statusInfoSet"];
}
