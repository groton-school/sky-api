<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ORUserModel $user
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class UserOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user","statusInfoSet"];
}
