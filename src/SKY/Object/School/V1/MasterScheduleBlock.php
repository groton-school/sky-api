<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $block_id
 * @property string|null $block
 * @property string|null $start_time
 * @property string|null $end_time
 * @property int|null $offering_type
 * @property bool $is_canceled
 * @api
 */
class MasterScheduleBlock extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["block_id","block","start_time","end_time","offering_type","is_canceled"];
}
