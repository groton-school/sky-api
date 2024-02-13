<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID of the field
 * @property string | null $description Description of the field
 *
 * @api
 */
class SourceModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description"];
}
