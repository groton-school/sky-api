<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property OrgModel[]|null $orgs
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class OrgsOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["orgs","statusInfoSet"];
}
