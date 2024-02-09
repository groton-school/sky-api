<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string $relationship_type
* @property bool|null $give_parental_access
* @property bool|null $list_as_parent
* @property bool|null $tuition_responsible_signer
* @property int $left_user
@api
*/
class RelationshipCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["relationship_type","give_parental_access","list_as_parent","tuition_responsible_signer","left_user"];
}
