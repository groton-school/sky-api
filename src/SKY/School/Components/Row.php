<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Row Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Field[] $columns The fields of
 *   the list
 *
 * @api
 */
class Row extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "columns",
    ];
}
