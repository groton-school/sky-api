<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentAppealResponse
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppealResponseResponses[]
 *   $responses responses
 *
 * @api
 */
class UpdateConstituentAppealResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "responses" => "\Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppealResponseResponses[]",
    ];
}
