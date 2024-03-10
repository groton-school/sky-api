<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The ID of student medical condition
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $condition
 *
 * @api
 */
class ConditionRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "condition" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
    ];
}
