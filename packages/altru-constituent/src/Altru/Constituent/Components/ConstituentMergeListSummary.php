<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentMergeConfigurations
 *
 * @property string $id The ID.
 * @property string $name The name.
 * @property string $description The description.
 *
 * @api
 */
class ConstituentMergeListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "name" => "string",
        "description" => "string",
    ];
}
