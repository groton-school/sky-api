<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID for the transportation
 * @property string | null $name Name of the transportation and capacity where
 *   applicable
 *
 * @api
 */
class Transportation extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
