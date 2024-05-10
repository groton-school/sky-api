<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditTribute
 *
 * @property string $tribute_id The tribute. Read-only in the SOAP API.
 * @property float $amount The amount.
 * @property string $designation_id The default designation. Read-only in the
 *   SOAP API.
 * @property string $base_currency_id The base currency. Read-only in the SOAP
 *   API.
 * @property bool $tribute_anonymous Indicates whether do not display on
 *   website.
 * @property bool $friends_asking_friends Indicates whether friends asking
 *   friends. Read-only in the SOAP API.
 *
 * @api
 */
class EditTribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "tribute_id" => "string",
        "amount" => "float",
        "designation_id" => "string",
        "base_currency_id" => "string",
        "tribute_anonymous" => "bool",
        "friends_asking_friends" => "bool",
    ];
}
