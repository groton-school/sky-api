<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAlternateLookupIds
 *
 * @property string $id The ID.
 * @property string $type The type.
 * @property string $alternate_lookup_id The lookup ID.
 *
 * @api
 */
class ConstituentAlternateLookupIdListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "type" => "string",
        "alternate_lookup_id" => "string",
    ];
}
