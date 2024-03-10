<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentFundraiser
 *
 * @property string $constituent_id The constituent id.
 * @property string $date_from The date from.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $date_to The date to.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 *
 * @api
 */
class NewConstituentFundraiser extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "date_from" => "string",
        "date_to" => "string",
    ];
}
