<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id 
 * @property string | null $title 
 * @property string | null $description 
 * @property string | null $photo 
 * @property string | null $type 
 * @property string | null $url 
 * @property string | null $category 
 *
 * @api
 */
class _Resource extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","title","description","photo","type","url","category"];
}
