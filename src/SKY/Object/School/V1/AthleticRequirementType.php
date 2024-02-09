<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Athletic requirement type
 *
 * @property int|null $id
 * @property string|null $description
 * @property string|null $frequency
 * @api
 */
class AthleticRequirementType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","frequency"];
}
