<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\LineItemModel
 *   $lineItem 
 *
 * @api
 */
class LineItemInputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["lineItem"];
}
