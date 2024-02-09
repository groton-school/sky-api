<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Emergency Contact List Model
*
* @property int $id
* @property EmergencyContactEmail[]|null $email_contact_list
* @property EmergencyContactPhone[]|null $phone_contact_list
@api
*/
class EmergencyContactList extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","email_contact_list","phone_contact_list"];
}
