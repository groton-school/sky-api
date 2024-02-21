<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The user Id that was enrolled
 * @property ?string $message The enrollment message
 *
 * @api
 */
class UserEnrollmentResponse extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "message",
    ];
}
