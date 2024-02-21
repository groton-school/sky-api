<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $cip_prefix
 * @property ?string $cip_suffix
 * @property int $id The Id of the Degree, Major, Minor, or Concentration
 * @property ?string $name The name of the Degree, Major, Minor, or
 *   Concentration
 * @property ?string $abbreviation The abbreviation of the Degree, Major,
 *   Minor, or Concentration
 *
 * @api
 */
class Major extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "cip_prefix",
        "cip_suffix",
        "id",
        "name",
        "abbreviation",
    ];
}
