<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAlternateLookupId
 *
 * @property string $constituent_id The constituent ID.
 * @property string $alternate_lookup_id_type The type. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/alternatelookupidtypecode/entries
 * @property string $alternate_lookup_id The lookup ID.
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
