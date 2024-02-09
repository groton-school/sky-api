<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property int $address_type_id
 * @api
 */
class AddressShare extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","address_type_id"];
}
