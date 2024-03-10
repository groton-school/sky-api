<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAlternateLookupId
 *
 * @property string $constituent_id The constituent id.
 * @property string $alternate_lookup_id_type The type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/alternatelookupidtypecode/entries
 * @property string $alternate_lookup_id The lookup id.
 *
 * @api
 */
class NewConstituentAlternateLookupId extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "alternate_lookup_id_type" => "string",
        "alternate_lookup_id" => "string",
    ];
}
