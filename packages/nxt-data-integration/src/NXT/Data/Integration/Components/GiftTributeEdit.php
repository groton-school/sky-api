<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Represents the editable properties of a Gift Tribute record in Raiser's
 * Edge.
 *
 * @property ?int $tribute_type The tribute type.
 * @property null|"Acknowledged"|"NotAcknowledged"|"DoNotAcknowledge"
 *   $acknowledge The gift tribute acknowledge status.
 *
 * @api
 */
class GiftTributeEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "tribute_type" => "int",
        "acknowledge" => "string",
    ];
}
