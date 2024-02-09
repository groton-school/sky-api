<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ORUserModel[]|null $users
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class UsersOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["users","statusInfoSet"];
}
