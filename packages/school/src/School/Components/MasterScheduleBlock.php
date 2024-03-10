<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class MasterScheduleBlock extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "block_id" => "int",
        "block" => "string",
        "start_time" => "string",
        "end_time" => "string",
        "offering_type" => "int",
        "is_canceled" => "bool",
    ];
}
