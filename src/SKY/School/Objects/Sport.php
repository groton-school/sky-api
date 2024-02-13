<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Sports Model
 *
 * @property int $id The ID of the sport
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Level $level Level
 *   Model
 * @property string | null $name The name of the sport
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Season $season Season
 *   Model
 *
 * @api
 */
class Sport extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","level","name","season"];
}
