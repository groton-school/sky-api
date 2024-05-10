<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsMembershipsMembersMembershipcards
 *
 * @property string $id id
 * @property string $name_on_card name on card
 * @property string $expiration_date expires on
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsMembershipsMembersMembershipcards extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "name_on_card" => "string",
        "expiration_date" => "string",
    ];
}
