<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id ID of the coach
 * @property string | null $first_name Coach's first name
 * @property string | null $last_name Coach's last name
 * @property string | null $title Coach's title
 * @property string | null $preferred_name Preferred Name
 *
 * @api
 */
class Coach extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","first_name","last_name","title","preferred_name"];
}
