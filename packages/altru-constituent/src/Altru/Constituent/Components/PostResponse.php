<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines the shape of a post response object.
 *
 * @property string $id The newly created ID.
 *
 * @api
 */
class PostResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
    ];
}
