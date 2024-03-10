<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Leader Model
 *
 * @property ?int $id The user ID for the leader
 * @property ?bool $head The head leader indicator
 * @property ?string $name The firstname and lastname of the leader
 *
 * @api
 */
class Leader extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "head" => "bool",
        "name" => "string",
    ];
}
