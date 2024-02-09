<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Media Model
 *
 * @property string|null $type
 * @property string|null $title
 * @property string|null $caption
 * @property string|null $url
 * @api
 */
class MediaItem extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["type","title","caption","url"];
}
