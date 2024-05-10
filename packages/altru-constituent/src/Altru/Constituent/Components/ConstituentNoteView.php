<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewConstituentNote
 *
 * @property string $date_entered The date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $title The title.
 * @property string $text_note The note.
 * @property string $author The author.
 * @property string $notetype The type.
 *
 * @api
 */
class ConstituentNoteView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date_entered" => "string",
        "title" => "string",
        "text_note" => "string",
        "author" => "string",
        "notetype" => "string",
    ];
}
