<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Team Model
 *
 * @property int $id The ID of the team
 * @property string | null $name The name of the team
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Sport $sport Sports
 *   Model
 *
 * @api
 */
class Team extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","sport"];
}
