<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ORDemographicModel
 *   $demographic
 *
 * @api
 */
class DemographicOutputModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "demographic",
    ];
}
