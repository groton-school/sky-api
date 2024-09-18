<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * User base read model
 *
 * @property ?int $Id The user ID of the user
 * @property ?string $FirstName The first name of the user
 * @property ?string $LastName The last name of the user
 * @property ?string $Email The email of the user
 *
 * @api
 */
class UserBaseReadModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "Id" => "int",
        "FirstName" => "string",
        "LastName" => "string",
        "Email" => "string",
    ];
}
