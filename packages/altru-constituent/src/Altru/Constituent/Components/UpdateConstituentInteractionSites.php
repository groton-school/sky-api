<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentInteractionSites
 *
 * @property string $id id
 * @property string $siteid site
 *
 * @api
 */
class UpdateConstituentInteractionSites extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "siteid" => "string",
    ];
}
