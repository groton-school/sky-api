<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetConstituentCorrespondenceCodeResponse
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCodeResponseResponses[]
 *   $responses Responses.
 *
 * @api
 */
class ConstituentCorrespondenceCodeResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "responses" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCodeResponseResponses[]",
    ];
}
