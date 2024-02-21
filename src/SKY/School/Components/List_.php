<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * List Model
 *
 * @property ?\Blackbaud\SKY\School\Components\Row[] $rows The Rows of the
 *   list
 *
 * @api
 */
class List_ extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "rows",
    ];
}
