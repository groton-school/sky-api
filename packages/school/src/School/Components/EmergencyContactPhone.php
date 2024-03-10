<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Emergency Contact Phone Model
 *
 * @property int $id Emergency contact phone ID
 * @property ?string $call_dialer Call dialer
 * @property int $contact_id Contact ID
 * @property ?string $first_name The first name of the emergency contact
 * @property ?string $last_name The last name of the emergency contact
 * @property int $phone_id Phone ID
 * @property int $phone_index_id Phone index ID
 * @property ?string $phone_number Phone number
 * @property ?string $phone_type Phone type
 * @property ?string $relationship The relationship of the emergency contact
 *   to the user
 * @property int $relationship_id The relationship ID of the emergency contact
 *   to the user
 * @property int $relationship_user_id The user ID of the emergency contact
 * @property ?int $sort_order Sort order
 * @property int $user_contact_id User contact ID
 *
 * @api
 */
class EmergencyContactPhone extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "call_dialer" => "string",
        "contact_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "phone_id" => "int",
        "phone_index_id" => "int",
        "phone_number" => "string",
        "phone_type" => "string",
        "relationship" => "string",
        "relationship_id" => "int",
        "relationship_user_id" => "int",
        "sort_order" => "int",
        "user_contact_id" => "int",
    ];
}
