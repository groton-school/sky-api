<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListState
 *
 * @property string $id The id.
 * @property string $state The state.
 * @property string $abbreviation The abbreviation.
 * @property bool $active Indicates whether active.
 *
 * @api
 */
class StateListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "state" => "string",
        "abbreviation" => "string",
        "active" => "bool",
    ];
}
