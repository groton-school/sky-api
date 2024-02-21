<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ORDemographicModel
 *   $demographic
 *
 * @api
 */
class DemographicOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "demographic" => "\Blackbaud\SKY\OneRoster\Components\ORDemographicModel",
    ];
}
