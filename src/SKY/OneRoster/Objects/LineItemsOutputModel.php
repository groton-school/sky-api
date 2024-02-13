<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\LineItemModel[] |
 *   null $lineItems 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class LineItemsOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["lineItems","statusInfoSet"];
}
