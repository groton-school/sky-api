<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The user Id that was enrolled
 * @property ?string $message The enrollment message
 *
 * @api
 */
class UserEnrollmentResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "message" => "string",
    ];
}
