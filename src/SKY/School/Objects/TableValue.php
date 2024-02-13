<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id 
 * @property string | null $name 
 * @property string | null $abbreviation 
 * @property bool $active 
 *
 * @api
 */
class TableValue extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","abbreviation","active"];
}
