<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * OfferingType Model
 *
 * @property int $id
 * @property string|null $description
 * @api
 */
class OfferingType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description"];
}
