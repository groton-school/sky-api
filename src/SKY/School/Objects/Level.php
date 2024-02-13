<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Level Model
 *
 * @property int | null $id The ID of a school level
 * @property string | null $abbreviation The abbreviation associated with a
 *   school level
 * @property string | null $name The label used to identify a school level
 *
 * @api
 */
class Level extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","abbreviation","name"];
}
