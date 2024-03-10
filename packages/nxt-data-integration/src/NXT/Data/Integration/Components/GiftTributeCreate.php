<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Represents the properties of a new Gift Tribute record in Raiser's Edge.
 *
 * @property int $gift_id The system record ID of the gift.
 * @property int $tribute_id The system record ID of the tribute.
 * @property ?string $import_id The import ID of the gift tribute record.
 *
 * @api
 */
class GiftTributeCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "gift_id" => "int",
        "tribute_id" => "int",
        "import_id" => "string",
    ];
}
