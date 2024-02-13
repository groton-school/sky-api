<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\ClassModel[] | null
 *   $classes 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class ClassesOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["classes","statusInfoSet"];
}
