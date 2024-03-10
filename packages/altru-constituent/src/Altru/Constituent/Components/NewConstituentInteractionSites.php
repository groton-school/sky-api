<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentInteractionSites
 *
 * @property string $id id
 * @property string $siteid site
 *
 * @api
 */
class NewConstituentInteractionSites extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "siteid" => "string",
    ];
}
