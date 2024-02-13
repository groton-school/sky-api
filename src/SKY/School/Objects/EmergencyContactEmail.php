<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact Email Model
 *
 * @property int $id Emergency contact email ID
 * @property string | null $automated_email Automated email type
 * @property int $contact_id Contact ID
 * @property string | null $email The email address of a user
 * @property string | null $first_name The first name of the emergency contact
 * @property string | null $last_name The last name of the emergency contact
 * @property string | null $relationship The relationship of the emergency
 *   contact to the user
 * @property int $relationship_id The relationship ID for the user's emergency
 *   contact
 * @property int $relationship_user_id The user ID of the emergency contact
 * @property int | null $sort_order Sort order
 * @property int $user_contact_id User contact ID
 *
 * @api
 */
class EmergencyContactEmail extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","automated_email","contact_id","email","first_name","last_name","relationship","relationship_id","relationship_user_id","sort_order","user_contact_id"];
}
