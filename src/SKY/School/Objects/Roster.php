<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Team ID
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\CoachCollection
 *   $coaches A Collection
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\PlayerCollection
 *   $players A Collection
 *
 * @api
 */
class Roster extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","coaches","players"];
}
