<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Row Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Field[] $columns The fields of
 *   the list
 *
 * @api
 */
class Row extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "columns" => "\Blackbaud\SKY\School\Components\Field[]",
    ];
}
