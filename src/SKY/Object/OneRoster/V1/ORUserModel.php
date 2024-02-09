<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $username
 * @property UserIdModel[]|null $userIds
 * @property bool|null $enabledUser
 * @property string|null $givenName
 * @property string|null $familyName
 * @property string|null $middleName
 * @property string|null $role
 * @property string|null $identifier
 * @property string|null $email
 * @property string|null $sms
 * @property string|null $phone
 * @property GuidRefModel[]|null $agents
 * @property GuidRefModel[]|null $orgs
 * @property _string|null $grades
 * @property string|null $password
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class ORUserModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["username","userIds","enabledUser","givenName","familyName","middleName","role","identifier","email","sms","phone","agents","orgs","grades","password","sourcedId","status","dateLastModified","metadata"];
}
