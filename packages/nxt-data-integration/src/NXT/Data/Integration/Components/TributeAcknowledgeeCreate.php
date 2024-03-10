<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $tribute_id
 * @property ?int $relationship_id
 * @property ?int $letter_id
 * @property ?int $sequence
 * @property ?string $import_id
 *
 * @api
 */
class TributeAcknowledgeeCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "tribute_id" => "int",
        "relationship_id" => "int",
        "letter_id" => "int",
        "sequence" => "int",
        "import_id" => "string",
    ];
}
