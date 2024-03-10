<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A mapping between a system record ID and an import ID.
 *
 * @property ?string $import_id The Import ID.
 * @property int $system_record_id The system record ID.
 *
 * @api
 */
class ImportIdMap extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "import_id" => "string",
        "system_record_id" => "int",
    ];
}
