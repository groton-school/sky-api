<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of student medical allergy
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $allergy
 *
 * @api
 */
class AllergyRead extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "allergy",
    ];
}
