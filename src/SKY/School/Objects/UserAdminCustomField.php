<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserAdminCustomField
 *
 * @property int | null $id User Id
 * @property string | null $first_name The first name of a user
 * @property string | null $last_name The last name of a user
 * @property string | null $preferred_name Preferred Name
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\CustomAdminField[] |
 *   null $custom_fields Custom Fields
 *
 * @api
 */
class UserAdminCustomField extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","first_name","last_name","preferred_name","custom_fields"];
}
