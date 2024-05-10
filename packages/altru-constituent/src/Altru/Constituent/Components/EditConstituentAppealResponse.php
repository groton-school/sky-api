<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentAppealResponse
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAppealResponseResponses[]
 *   $responses Responses.
 *
 * @api
 */
class EditConstituentAppealResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "responses" => "\Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAppealResponseResponses[]",
    ];
}
