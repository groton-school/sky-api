<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $block_id
 * @property string|null $block_description
 * @property string|null $start_time
 * @property string|null $end_time
 * @api
 */
class SpecialDayBlock extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["block_id","block_description","start_time","end_time"];
}
