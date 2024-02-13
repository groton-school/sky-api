<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * PhoneRead Model
 *
 * @property int $id The ID of the phone number
 * @property string | null $phone_type The 'Type' of the phone number
 * @property int | null $index_id The Index ID of the phone number
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\PhoneTypeLink[] | null
 *   $links Returns each instance of a phone type for each relationship to the
 *   user
 * @property string | null $number The phone number
 * @property int | null $type_id The type ID of a phone number; the type ID
 *   corresponds with the type of phone number (ex. Cell, Work, Home)
 * @property int | null $user_id The ID of the user the phone number belongs
 *   to
 *
 * @api
 */
class PhoneRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","phone_type","index_id","links","number","type_id","user_id"];
}
