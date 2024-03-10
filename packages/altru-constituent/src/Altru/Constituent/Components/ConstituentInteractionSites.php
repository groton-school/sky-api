<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentInteractionSites
 *
 * @property string $id id
 * @property string $siteid site
 *
 * @api
 */
class ConstituentInteractionSites extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "siteid" => "string",
    ];
}
