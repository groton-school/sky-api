<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $description
 * @api
 */
class HomeLanguageRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description"];
}
