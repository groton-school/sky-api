<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentInteractionParticipants
 *
 * @property string $id id
 * @property string $constituent_id participant
 *
 * @api
 */
class UpdateConstituentInteractionParticipants extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "constituent_id" => "string",
    ];
}
