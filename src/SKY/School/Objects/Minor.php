<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the Degree, Major, Minor, or Concentration
 * @property string $name The name of the Degree, Major, Minor, or
 *   Concentration
 * @property string $abbreviation The abbreviation of the Degree, Major,
 *   Minor, or Concentration
 *
 * @api
 */
class Minor extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "name",
        "abbreviation",
    ];
}
