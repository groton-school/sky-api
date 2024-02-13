<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the Degree, Major, Minor, or Concentration
 * @property string | null $name The name of the Degree, Major, Minor, or
 *   Concentration
 * @property string | null $abbreviation The abbreviation of the Degree,
 *   Major, Minor, or Concentration
 *
 * @api
 */
class Concentration extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","abbreviation"];
}
