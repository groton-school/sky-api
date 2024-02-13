<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of student medical condition
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $condition 
 *
 * @api
 */
class ConditionRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","condition"];
}
