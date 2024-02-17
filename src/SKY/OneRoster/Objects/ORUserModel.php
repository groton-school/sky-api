<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $username
 * @property \Blackbaud\SKY\OneRoster\Objects\UserIdModel[] $userIds
 * @property bool $enabledUser
 * @property string $givenName
 * @property string $familyName
 * @property string $middleName
 * @property string $role
 * @property string $identifier
 * @property string $email
 * @property string $sms
 * @property string $phone
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $agents
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $orgs
 * @property string[] $grades
 * @property string $password
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property string[] $metadata
 *
 * @api
 */
class ORUserModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "username",
        "userIds",
        "enabledUser",
        "givenName",
        "familyName",
        "middleName",
        "role",
        "identifier",
        "email",
        "sms",
        "phone",
        "agents",
        "orgs",
        "grades",
        "password",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
