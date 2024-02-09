<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property IdDescriptorField $allergy
 * @api
 */
class AllergyRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","allergy"];
}
