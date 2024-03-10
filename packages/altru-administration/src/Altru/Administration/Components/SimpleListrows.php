<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property string $value The value.
 * @property string $label The label.
 *
 * @api
 */
class SimpleListrows extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "value" => "string",
        "label" => "string",
    ];
}
