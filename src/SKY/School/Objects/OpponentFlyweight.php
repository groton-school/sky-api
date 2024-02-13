<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID ofthe opponent
 * @property string | null $name Name of the opponent
 * @property bool | null $in_use indicates of the opponent is currently being
 *   used
 *
 * @api
 */
class OpponentFlyweight extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","in_use"];
}
