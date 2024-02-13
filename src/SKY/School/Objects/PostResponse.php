<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property bool $value The return value for the POST
 *
 * @api
 */
class PostResponse extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["value"];
}
