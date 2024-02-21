<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact List Model
 *
 * @property int $id User ID
 * @property ?\Blackbaud\SKY\School\Components\EmergencyContactEmail[]
 *   $email_contact_list List of emergency contact emails
 * @property ?\Blackbaud\SKY\School\Components\EmergencyContactPhone[]
 *   $phone_contact_list List of emergency contact phones
 *
 * @api
 */
class EmergencyContactList extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "email_contact_list",
        "phone_contact_list",
    ];
}
