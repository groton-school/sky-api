<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $block_id 
 * @property string | null $block 
 * @property string | null $start_time 
 * @property string | null $end_time 
 * @property int | null $offering_type 
 * @property bool $is_canceled 
 *
 * @api
 */
class MasterScheduleBlock extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["block_id","block","start_time","end_time","offering_type","is_canceled"];
}
