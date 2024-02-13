<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Row Model
 *
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Field[] | null $columns
 *   The fields of the list
 *
 * @api
 */
class Row extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["columns"];
}
