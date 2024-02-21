<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ORDemographicModel[]
 *   $demographics
 * @property \Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class DemographicsOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "demographics",
        "statusInfoSet",
    ];
}
