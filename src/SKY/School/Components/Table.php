<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $name
 *
 * @api
 */
class Table extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
