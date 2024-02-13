<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * RaceRead Model
 *
 * @property int $race_type_id The ID of a race type
 * @property string | null $description The description of a race type
 * @property int $user_race_id The ID of user and race type association
 * @property int $user_id The ID of the user who is associated to race type
 *
 * @api
 */
class RaceRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["race_type_id","description","user_race_id","user_id"];
}
