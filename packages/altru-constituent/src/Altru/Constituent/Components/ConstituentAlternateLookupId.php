<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetConstituentAlternateLookupId
 *
 * @property string $alternate_lookup_id_type The type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/alternatelookupidtypecode/entries
 * @property string $alternate_lookup_id The lookup id.
 *
 * @api
 */
class ConstituentAlternateLookupId extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "alternate_lookup_id_type" => "string",
        "alternate_lookup_id" => "string",
    ];
}
