<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetConstituentFundraiser
 *
 * @property string $date_from The date from.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $date_to The date to.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 *
 * @api
 */
class ConstituentFundraiser extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date_from" => "string",
        "date_to" => "string",
    ];
}
