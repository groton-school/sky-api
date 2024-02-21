<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The ID of student medical allergy
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $allergy
 *
 * @api
 */
class AllergyRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "allergy" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
    ];
}
