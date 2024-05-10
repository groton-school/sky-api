<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewIndividualRecentRevenue
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentRevenueConstituentrevenuerecent[]
 *   $constituentrevenuerecent Constituentrevenuerecent.
 *
 * @api
 */
class IndividualRecentRevenueView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituentrevenuerecent" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentRevenueConstituentrevenuerecent[]",
    ];
}
