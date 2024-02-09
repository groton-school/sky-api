<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $sourcedId
 * @property string|null $href
 * @property string|null $type
 * @api
 */
class GuidRefModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["sourcedId","href","type"];
}
