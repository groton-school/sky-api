<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $type 
 * @property string | null $identifier 
 *
 * @api
 */
class UserIdModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["type","identifier"];
}
