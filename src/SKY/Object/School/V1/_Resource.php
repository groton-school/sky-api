<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $photo
 * @property string|null $type
 * @property string|null $url
 * @property string|null $category
 * @api
 */
class _Resource extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","title","description","photo","type","url","category"];
}
