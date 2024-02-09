<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property LineItemModel $lineItem
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class LineItemOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["lineItem","statusInfoSet"];
}
