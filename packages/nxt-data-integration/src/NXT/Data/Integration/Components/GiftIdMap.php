<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A mapping between a system record ID and a gift ID.
 *
 * @property ?string $gift_id The gift ID.
 * @property int $system_record_id The system record ID.
 *
 * @api
 */
class GiftIdMap extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "gift_id" => "string",
        "system_record_id" => "int",
    ];
}
