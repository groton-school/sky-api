<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $block_id
 * @property ?string $block_description
 * @property ?string $start_time
 * @property ?string $end_time
 *
 * @api
 */
class SpecialDayBlock extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "block_id",
        "block_description",
        "start_time",
        "end_time",
    ];
}
