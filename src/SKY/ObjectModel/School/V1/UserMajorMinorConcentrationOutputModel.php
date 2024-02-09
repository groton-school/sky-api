<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property int|null $parent_id
* @property Major $major
* @property Minor $minor
* @property Concentration $concentration
* @property string|null $cip_prefix
* @property string|null $cip_suffix
@api
*/
class UserMajorMinorConcentrationOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","parent_id","major","minor","concentration","cip_prefix","cip_suffix"];
}
