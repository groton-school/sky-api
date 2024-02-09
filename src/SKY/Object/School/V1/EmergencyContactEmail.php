<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Emergency Contact Email Model
 *
 * @property int $id
 * @property string|null $automated_email
 * @property int $contact_id
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $relationship
 * @property int $relationship_id
 * @property int $relationship_user_id
 * @property int|null $sort_order
 * @property int $user_contact_id
 * @api
 */
class EmergencyContactEmail extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","automated_email","contact_id","email","first_name","last_name","relationship","relationship_id","relationship_user_id","sort_order","user_contact_id"];
}
