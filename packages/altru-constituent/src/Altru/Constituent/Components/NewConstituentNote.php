<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentNote
 *
 * @property string $constituent_id The constituent id.
 * @property int $context_type The context type. Read-only in the SOAP API.
 * @property string $title The the title of this note.
 * @property string $date_entered The the date this note was entered.Uses the
 *   format YYYY-MM-DD. An example date: *2019-11-21*.
 * @property string $author_id The the author of this note.
 * @property string $note_type The the user-defined type of this note. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/constituentnotetypecode/entries
 * @property string $text_note The the plain text that comprises this note.
 * @property string $html_note The the html that comprises this note.
 *
 * @api
 */
class NewConstituentNote extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "context_type" => "int",
        "title" => "string",
        "date_entered" => "string",
        "author_id" => "string",
        "note_type" => "string",
        "text_note" => "string",
        "html_note" => "string",
    ];
}
