<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The id of the user in Education Management
 * @property string $current_authentication The users current authentication
 *   method
 * @property int $days_remaining The number of days remaining on the users
 *   invitation
 * @property string $email The email of the user
 * @property string $invalid_message If the user is not able to be invited to
 *   use BBID via Education Management, this message should indicate why
 * @property string $invited The date when the user was invited
 * @property string $name The name of the user
 * @property int $status_id The id of the users current status
 * @property string $status The users current status
 * @property string $username The users BBID Username
 *
 * @api
 */
class SchoolBbidStatus extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "current_authentication",
        "days_remaining",
        "email",
        "invalid_message",
        "invited",
        "name",
        "status_id",
        "status",
        "username",
    ];
}
