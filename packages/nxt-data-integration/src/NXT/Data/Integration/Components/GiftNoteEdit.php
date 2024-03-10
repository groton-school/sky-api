<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Contains the editable fields for a gift note.
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate $date
 * @property ?string $summary The note summary; corresponds to Description in
 *   dbo.GiftNotepad.
 * @property ?string $text The text content of the note.
 * @property int $note_type_id The ID for the note type.
 * @property ?string $author The author of the note.
 *
 * @api
 */
class GiftNoteEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "summary" => "string",
        "text" => "string",
        "note_type_id" => "int",
        "author" => "string",
    ];
}
