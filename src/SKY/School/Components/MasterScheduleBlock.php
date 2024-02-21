<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $block_id
 * @property ?string $block
 * @property ?string $start_time
 * @property ?string $end_time
 * @property ?int $offering_type
 * @property bool $is_canceled
 *
 * @api
 */
class MasterScheduleBlock extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "block_id",
        "block",
        "start_time",
        "end_time",
        "offering_type",
        "is_canceled",
    ];
}
