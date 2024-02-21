<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $block_id
 * @property ?string $block_description
 * @property ?string $start_time
 * @property ?string $end_time
 *
 * @api
 */
class SpecialDayBlock extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "block_id" => "int",
        "block_description" => "string",
        "start_time" => "string",
        "end_time" => "string",
    ];
}
