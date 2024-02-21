<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $present Individual was present
 * @property int $absence Individual was absent
 * @property int $tardy Individual was tardy
 *
 * @api
 */
class AttendanceTypes extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "present",
        "absence",
        "tardy",
    ];
}
