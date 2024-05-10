<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentCorrespondenceCodeResponse
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCodeResponseResponses[]
 *   $responses Responses.
 *
 * @api
 */
class EditConstituentCorrespondenceCodeResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "responses" => "\Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCodeResponseResponses[]",
    ];
}
