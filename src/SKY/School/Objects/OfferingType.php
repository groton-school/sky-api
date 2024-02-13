<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * OfferingType Model
 *
 * @property int $id The ID of an offering type
 * @property string | null $description The description of an offering type
 *
 * @api
 */
class OfferingType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description"];
}
