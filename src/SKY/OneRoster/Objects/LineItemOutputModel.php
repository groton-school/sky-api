<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\LineItemModel
 *   $lineItem 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class LineItemOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["lineItem","statusInfoSet"];
}
