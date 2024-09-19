<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * List Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Row[] $rows The Rows of the
 *   list
 *
 * @api
 */
class List_ extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "rows" => "\Blackbaud\SKY\School\Components\Row[]",
    ];
}
