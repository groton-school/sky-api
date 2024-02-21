<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $name
 * @property string $abbreviation
 * @property bool $active
 *
 * @api
 */
class TableValue extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "abbreviation",
        "active",
    ];
}
