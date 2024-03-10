<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A gift tribute record in Raiser's Edge.
 *
 * @property int $id The system record ID of the gift tribute.
 * @property int $gift_id The system record ID of the gift.
 * @property int $tribute_id The system record ID of the tribute.
 * @property ?int $tribute_type The tribute type.
 * @property ?string $import_id The import ID of thte gift tribute.
 * @property "Acknowledged"|"NotAcknowledged"|"DoNotAcknowledge" $acknowledge
 *   The gift tribute acknowledge status.
 * @property int $sequence The numeric sequence associated with the gift
 *   tribute.
 *
 * @api
 */
class GiftTribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "gift_id" => "int",
        "tribute_id" => "int",
        "tribute_type" => "int",
        "import_id" => "string",
        "acknowledge" => "string",
        "sequence" => "int",
    ];
}
