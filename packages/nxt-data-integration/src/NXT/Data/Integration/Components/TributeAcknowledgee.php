<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.TRIBUTE\_ACKNOWLEDGEE table in Raiser's Edge
 *
 * @property int $id The tribute acknowledgee ID.
 * @property int $tribute_id The ID of the tribute this acknowledgee is for.
 * @property ?int $relationships_id The relationship ID of the acknowledgee.
 *   If null, this represents a self-acknowledgee.
 * @property ?int $letter The code table entry id of the letter for this
 *   acknowledgee.
 * @property ?int $sequence Order this acknowledgee appears on the tribute.
 * @property ?string $import_id Import ID of this acknowledgee.
 *
 * @api
 */
class TributeAcknowledgee extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "tribute_id" => "int",
        "relationships_id" => "int",
        "letter" => "int",
        "sequence" => "int",
        "import_id" => "string",
    ];
}
