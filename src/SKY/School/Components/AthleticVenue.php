<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id ID for the venue
 * @property string $name Name of the venue
 *
 * @api
 */
class AthleticVenue extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
