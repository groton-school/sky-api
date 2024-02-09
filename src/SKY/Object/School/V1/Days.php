<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Days for medication
 *
 * @property bool $sunday
 * @property bool $monday
 * @property bool $tuesday
 * @property bool $wednesday
 * @property bool $thursday
 * @property bool $friday
 * @property bool $saturday
 * @api
 */
class Days extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["sunday","monday","tuesday","wednesday","thursday","friday","saturday"];
}
