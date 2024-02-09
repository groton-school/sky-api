<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * AddressType Model
 *
 * @property int $id
 * @property string|null $type
 * @api
 */
class AddressType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","type"];
}
