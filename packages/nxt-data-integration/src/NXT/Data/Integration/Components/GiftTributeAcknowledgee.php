<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A gift tribute acknowledgee record in Raiser's Edge.
 *
 * @property int $id The system record ID of the gift tribute acknowledgee.
 * @property int $gift_tribute_id The system record ID of the gift tribute.
 * @property bool $self_acknowledge Indicates whether this is a
 *   self-acknowledge.
 * @property ?int $relationships_id The system record ID of the relationship
 *   for the acknowledgee.
 * @property ?int $letter The letter sent to the acknowledgee.
 * @property ?string $letter_date The date on which the letter was sent.
 * @property ?string $import_id The import ID of the gift tribute
 *   acknowledgee.
 *
 * @api
 */
class GiftTributeAcknowledgee extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "gift_tribute_id" => "int",
        "self_acknowledge" => "bool",
        "relationships_id" => "int",
        "letter" => "int",
        "letter_date" => "string",
        "import_id" => "string",
    ];
}
