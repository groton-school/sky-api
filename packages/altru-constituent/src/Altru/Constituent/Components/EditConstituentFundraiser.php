<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentFundraiser
 *
 * @property string $date_from The date from. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $date_to The date to. Uses the format YYYY-MM-DDThh:mm:ss.
 *   An example date: *1955-11-05T22:04:00*.
 *
 * @api
 */
class EditConstituentFundraiser extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date_from" => "string",
        "date_to" => "string",
    ];
}
