<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $cip_prefix 
 * @property string | null $cip_suffix 
 * @property int $id The Id of the Degree, Major, Minor, or Concentration
 * @property string | null $name The name of the Degree, Major, Minor, or
 *   Concentration
 * @property string | null $abbreviation The abbreviation of the Degree,
 *   Major, Minor, or Concentration
 *
 * @api
 */
class Major extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["cip_prefix","cip_suffix","id","name","abbreviation"];
}
