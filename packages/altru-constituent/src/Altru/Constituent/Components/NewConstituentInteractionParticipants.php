<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentInteractionParticipants
 *
 * @property string $id id
 * @property string $constituent_id participant
 *
 * @api
 */
class NewConstituentInteractionParticipants extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "constituent_id" => "string",
    ];
}
