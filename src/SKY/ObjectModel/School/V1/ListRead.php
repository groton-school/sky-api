<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* ListRead Class
*
* @property int $id
* @property string|null $name
* @property string|null $type
* @property string|null $description
* @property string|null $category
* @property string|null $created_by
* @property string|null $created
* @property string|null $last_modified
@api
*/
class ListRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","type","description","category","created_by","created","last_modified"];
}
