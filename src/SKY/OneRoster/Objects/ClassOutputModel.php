<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\ClassModel $class 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class ClassOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["class","statusInfoSet"];
}
