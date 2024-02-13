<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID for the venue
 * @property string | null $name Name of the venue
 *
 * @api
 */
class AthleticVenue extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
