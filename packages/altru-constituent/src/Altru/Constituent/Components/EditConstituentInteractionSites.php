<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentInteractionSites
 *
 * @property string $id id
 * @property string $siteid site
 *
 * @api
 */
class EditConstituentInteractionSites extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "siteid" => "string",
    ];
}
