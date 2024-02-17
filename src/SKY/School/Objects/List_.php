<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * List Model
 *
 * @property \Blackbaud\SKY\School\Objects\Row[] $rows The Rows of the list
 *
 * @api
 */
class List_ extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "rows",
    ];
}
