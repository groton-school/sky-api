<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Department model
 *
 * @property ?int $id The ID of the department
 * @property ?string $level_description The description of the level this
 *   department is associated with
 * @property ?string $name The name of the department
 * @property ?int $sort The sort order of the department
 *
 * @api
 */
class Department extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "level_description",
        "name",
        "sort",
    ];
}
