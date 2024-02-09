<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property CoachCollection $coaches A Collection
 * @property PlayerCollection $players A Collection
 * @api
 */
class Roster extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","coaches","players"];
}
