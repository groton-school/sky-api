<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of student medical condition
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $condition
 *
 * @api
 */
class ConditionRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "condition",
    ];
}
