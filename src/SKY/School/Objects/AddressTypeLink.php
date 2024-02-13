<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * AddressTypeLink Model
 *
 * @property int | null $type_id The ID of the type
 * @property bool $primary Returns true if the address is primary
 * @property bool $shared Returns true if changes to an address are made to
 *   all users with a shared relationship (Read Only)
 * @property string | null $shared_relationship The relationship of the shared
 *   user
 * @property string | null $shared_user The name of the shared user
 * @property string | null $type The name of the address type
 * @property int | null $user_id The ID of the user
 *
 * @api
 */
class AddressTypeLink extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["type_id","primary","shared","shared_relationship","shared_user","type","user_id"];
}
