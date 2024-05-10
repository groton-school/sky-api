<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowNewconstituentNameformats
 *
 * @property string $name_format_type The name format type. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/nameformattypecode/entries
 * @property string $custom_name custom name
 *
 * @api
 */
class NewRevenueBatchRowNewconstituentNameformats extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name_format_type" => "string",
        "custom_name" => "string",
    ];
}
