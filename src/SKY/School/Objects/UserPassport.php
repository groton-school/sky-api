<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for passport information
 *
 * @property string | null $number The passport number of the user.
 * @property string | null $expire_date The passport expiry date. Use ISO-8601
 *   date format: 2022-04-21.
 *
 * @api
 */
class UserPassport extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["number","expire_date"];
}
