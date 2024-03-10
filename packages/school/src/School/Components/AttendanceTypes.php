<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $present Individual was present
 * @property int $absence Individual was absent
 * @property int $tardy Individual was tardy
 *
 * @api
 */
class AttendanceTypes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "present" => "int",
        "absence" => "int",
        "tardy" => "int",
    ];
}
