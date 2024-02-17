<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact List Model
 *
 * @property int $id User ID
 * @property \Blackbaud\SKY\School\Objects\EmergencyContactEmail[]
 *   $email_contact_list List of emergency contact emails
 * @property \Blackbaud\SKY\School\Objects\EmergencyContactPhone[]
 *   $phone_contact_list List of emergency contact phones
 *
 * @api
 */
class EmergencyContactList extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "email_contact_list",
        "phone_contact_list",
    ];
}
