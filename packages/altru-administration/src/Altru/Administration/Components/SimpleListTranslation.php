<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * The simplelist translation.
 *
 * @property string $value The value of the simplelist entry.
 *
 * @api
 */
class SimpleListTranslation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "value" => "string",
    ];
}
