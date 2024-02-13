<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Media Model
 *
 * @property string | null $type 
 * @property string | null $title 
 * @property string | null $caption 
 * @property string | null $url 
 *
 * @api
 */
class MediaItem extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["type","title","caption","url"];
}
