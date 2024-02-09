<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Used to create a non-user emergency contact
*
* @property int $automated_email
* @property string|null $email
* @property int $call_dialer
* @property string|null $firstname
* @property string|null $lastname
* @property string|null $phone_number
* @property string|null $phone_type
* @property string|null $relationship
@api
*/
class EmergencyContactNonUserCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["automated_email","email","call_dialer","firstname","lastname","phone_number","phone_type","relationship"];
}
