<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Represents the fields for a gift note record in dbo.GiftNotepad.
 *
 * @property int $gift_id The record ID of the gift to which the note belongs;
 *   corresponds to ParentId in dbo.GiftNotepad.
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate $date
 * @property ?string $summary The note summary; corresponds to Description in
 *   dbo.GiftNotepad.
 * @property ?string $text The text content of the note.
 * @property ?string $type The note type.
 * @property ?string $author The author of the note.
 *
 * @api
 */
class GiftNote extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "gift_id" => "int",
        "date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "summary" => "string",
        "text" => "string",
        "type" => "string",
        "author" => "string",
    ];
}
