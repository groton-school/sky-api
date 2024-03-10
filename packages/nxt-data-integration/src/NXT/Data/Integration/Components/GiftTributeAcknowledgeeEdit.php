<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Represents the editable properties of a Gift Tribute Acknowledgee record in
 * Raiser's Edge.
 *
 * @property ?int $letter The letter.
 * @property ?string $letter_date The letter date.
 *
 * @api
 */
class GiftTributeAcknowledgeeEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "letter" => "int",
        "letter_date" => "string",
    ];
}
