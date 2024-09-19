<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * HomeLanguageAdd Model
 *
 * @property ?string $language The ID or description of the language to be
 *   added to the user
 *
 * @api
 */
class HomeLanguageAdd extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "language" => "string",
    ];
}
