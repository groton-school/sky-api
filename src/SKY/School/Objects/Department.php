<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Department model
 *
 * @property int | null $id The ID of the department
 * @property string | null $level_description The description of the level
 *   this department is associated with
 * @property string | null $name The name of the department
 * @property int | null $sort The sort order of the department
 *
 * @api
 */
class Department extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","level_description","name","sort"];
}
