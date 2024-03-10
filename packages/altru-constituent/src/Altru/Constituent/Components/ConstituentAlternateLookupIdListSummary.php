<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAlternateLookupId
 *
 * @property string $id The id.
 * @property string $type The type.
 * @property string $alternate_lookup_id The lookup id.
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
