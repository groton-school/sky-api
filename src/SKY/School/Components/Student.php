<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student Model
 *
 * @property int $id The ID of the student
 * @property ?string $name The name of the student
 *
 * @api
 */
class Student extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
