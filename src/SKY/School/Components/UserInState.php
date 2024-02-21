<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for in-state resident information
 *
 * @property string $resident The value the user has selected for In-State
 *   Resident. Allowed values: Yes, No, or No answer.
 * @property string $county The county of residence of the user.
 * @property string $from_date The date the user has resided in the county of
 *   residence. Use ISO-8601 date format: 2022-04-21.
 *
 * @api
 */
class UserInState extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "resident",
        "county",
        "from_date",
    ];
}
