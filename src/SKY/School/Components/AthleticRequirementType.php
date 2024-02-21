<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Athletic requirement type
 *
 * @property ?int $id The ID of athletic requirement type
 * @property ?string $description The description of athletic requirement type
 * @property ?string $frequency The requirement frequency code: year, season
 *
 * @api
 */
class AthleticRequirementType extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "description",
        "frequency",
    ];
}
