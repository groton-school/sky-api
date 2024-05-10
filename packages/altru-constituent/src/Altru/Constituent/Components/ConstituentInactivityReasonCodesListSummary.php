<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentInactivityReasonCodes
 *
 * @property string $id The ID.
 * @property string $code The reason code.
 * @property string $description The description.
 * @property bool $active Indicates whether active.
 *
 * @api
 */
class ConstituentInactivityReasonCodesListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "code" => "string",
        "description" => "string",
        "active" => "bool",
    ];
}
