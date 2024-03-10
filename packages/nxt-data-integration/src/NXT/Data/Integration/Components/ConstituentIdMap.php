<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A mapping between a system record ID and a constituent ID.
 *
 * @property ?string $constituent_id The constituent ID.
 * @property int $system_record_id The system record ID.
 * @property "Active"|"Inactive"|"None" $fundraiser_status The fundraiser
 *   status.
 *
 * @api
 */
class ConstituentIdMap extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "system_record_id" => "int",
        "fundraiser_status" => "string",
    ];
}
