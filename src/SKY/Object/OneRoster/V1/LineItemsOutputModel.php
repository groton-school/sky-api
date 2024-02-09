<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property LineItemModel[]|null $lineItems
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class LineItemsOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["lineItems","statusInfoSet"];
}
