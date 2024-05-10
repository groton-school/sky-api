<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetConstituentAppealResponse
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppealResponseResponses[]
 *   $responses Responses.
 *
 * @api
 */
class ConstituentAppealResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "responses" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppealResponseResponses[]",
    ];
}
