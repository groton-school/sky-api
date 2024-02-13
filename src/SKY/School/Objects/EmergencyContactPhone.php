<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact Phone Model
 *
 * @property int $id Emergency contact phone ID
 * @property string | null $call_dialer Call dialer
 * @property int $contact_id Contact ID
 * @property string | null $first_name The first name of the emergency contact
 * @property string | null $last_name The last name of the emergency contact
 * @property int $phone_id Phone ID
 * @property int $phone_index_id Phone index ID
 * @property string | null $phone_number Phone number
 * @property string | null $phone_type Phone type
 * @property string | null $relationship The relationship of the emergency
 *   contact to the user
 * @property int $relationship_id The relationship ID of the emergency contact
 *   to the user
 * @property int $relationship_user_id The user ID of the emergency contact
 * @property int | null $sort_order Sort order
 * @property int $user_contact_id User contact ID
 *
 * @api
 */
class EmergencyContactPhone extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","call_dialer","contact_id","first_name","last_name","phone_id","phone_index_id","phone_number","phone_type","relationship","relationship_id","relationship_user_id","sort_order","user_contact_id"];
}
