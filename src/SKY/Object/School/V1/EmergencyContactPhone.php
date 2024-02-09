<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Emergency Contact Phone Model
 *
 * @property int $id
 * @property string|null $call_dialer
 * @property int $contact_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int $phone_id
 * @property int $phone_index_id
 * @property string|null $phone_number
 * @property string|null $phone_type
 * @property string|null $relationship
 * @property int $relationship_id
 * @property int $relationship_user_id
 * @property int|null $sort_order
 * @property int $user_contact_id
 * @api
 */
class EmergencyContactPhone extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","call_dialer","contact_id","first_name","last_name","phone_id","phone_index_id","phone_number","phone_type","relationship","relationship_id","relationship_user_id","sort_order","user_contact_id"];
}
