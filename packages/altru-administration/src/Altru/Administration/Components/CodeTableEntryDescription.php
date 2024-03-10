<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property string $description
 *
 * @api
 */
class CodeTableEntryDescription extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "description" => "string",
    ];
}
