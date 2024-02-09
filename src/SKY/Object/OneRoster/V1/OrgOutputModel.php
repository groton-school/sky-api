<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property OrgModel $org
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class OrgOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["org","statusInfoSet"];
}
