<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class EmergencyContactList extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "email_contact_list" => "\Blackbaud\SKY\School\Components\EmergencyContactEmail[]",
        "phone_contact_list" => "\Blackbaud\SKY\School\Components\EmergencyContactPhone[]",
    ];
}
