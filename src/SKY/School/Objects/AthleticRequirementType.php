<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Athletic requirement type
 *
 * @property int | null $id The ID of athletic requirement type
 * @property string | null $description The description of athletic
 *   requirement type
 * @property string | null $frequency The requirement frequency code: year,
 *   season
 *
 * @api
 */
class AthleticRequirementType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","frequency"];
}
