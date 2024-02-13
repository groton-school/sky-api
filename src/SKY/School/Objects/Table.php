<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id 
 * @property string | null $name 
 *
 * @api
 */
class Table extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
