<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowApplicationBusinessUnits
 *
 * @property string $application_id application id
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationbusinessunitsBusinessunits[]
 *   $businessunits Businessunits.
 * @property bool $override_business_units override business units
 * @property string $reason The reason. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuesplitbusinessunitoverridecode/entries
 * @property bool $application_declines_gift_aid application declines gift aid
 * @property string $application_sponsorship_id application sponsorship id
 *
 * @api
 */
class NewRevenueBatchRowApplicationBusinessUnits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "application_id" => "string",
        "businessunits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationbusinessunitsBusinessunits[]",
        "override_business_units" => "bool",
        "reason" => "string",
        "application_declines_gift_aid" => "bool",
        "application_sponsorship_id" => "string",
    ];
}
