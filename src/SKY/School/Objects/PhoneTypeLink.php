<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * PhoneTypeLink Model
 *
 * @property int | null $id The type ID of a phone number; the type ID
 *   corresponds with the type of phone number (ex. Cell, Work, Home)
 * @property bool $shared Returns true if changes to a phone number are made
 *   to all users with a shared relationship (Read Only)
 * @property string | null $shared_relationship The relationship of the shared
 *   user
 * @property string | null $shared_user The name of the shared user
 * @property string | null $type_id The name of the type
 * @property int | null $user_id The ID of the user
 *
 * @api
 */
class PhoneTypeLink extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","shared","shared_relationship","shared_user","type_id","user_id"];
}
