<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $username 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\UserIdModel[] | null
 *   $userIds 
 * @property bool | null $enabledUser 
 * @property string | null $givenName 
 * @property string | null $familyName 
 * @property string | null $middleName 
 * @property string | null $role 
 * @property string | null $identifier 
 * @property string | null $email 
 * @property string | null $sms 
 * @property string | null $phone 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $agents 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $orgs 
 * @property string[] | null $grades 
 * @property string | null $password 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class ORUserModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["username","userIds","enabledUser","givenName","familyName","middleName","role","identifier","email","sms","phone","agents","orgs","grades","password","sourcedId","status","dateLastModified","metadata"];
}
