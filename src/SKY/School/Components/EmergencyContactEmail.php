<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Emergency Contact Email Model
 *
 * @property int $id Emergency contact email ID
 * @property ?string $automated_email Automated email type
 * @property int $contact_id Contact ID
 * @property ?string $email The email address of a user
 * @property ?string $first_name The first name of the emergency contact
 * @property ?string $last_name The last name of the emergency contact
 * @property ?string $relationship The relationship of the emergency contact
 *   to the user
 * @property int $relationship_id The relationship ID for the user's emergency
 *   contact
 * @property int $relationship_user_id The user ID of the emergency contact
 * @property ?int $sort_order Sort order
 * @property int $user_contact_id User contact ID
 *
 * @api
 */
class EmergencyContactEmail extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "automated_email" => "string",
        "contact_id" => "int",
        "email" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "relationship" => "string",
        "relationship_id" => "int",
        "relationship_user_id" => "int",
        "sort_order" => "int",
        "user_contact_id" => "int",
    ];
}
