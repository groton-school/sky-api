<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetCodeTableSortMethod
 *
 * @property string $sort_method The how to sort the entries when presenting
 *   the list to the user.. Available values are *alpha*, *user-defined*
 *
 * @api
 */
class CodeTableSortMethod extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sort_method" => "string",
    ];
}
