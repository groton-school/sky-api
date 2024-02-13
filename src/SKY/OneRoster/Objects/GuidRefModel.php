<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $sourcedId 
 * @property string | null $href 
 * @property string | null $type 
 *
 * @api
 */
class GuidRefModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["sourcedId","href","type"];
}
