<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* RelationshipRead Model
*
* @property string|null $id
* @property string|null $comment
* @property bool $contact
* @property string|null $first_name
* @property string|null $last_name
* @property bool $list_as_parent
* @property bool $parental_access
* @property bool $primary
* @property int|null $relationship
* @property bool $resides_with
* @property bool $show_parent
* @property bool $tuition_responsible_signer
* @property int|null $type_id
* @property int|null $user_one_id
* @property string|null $user_one_role
* @property int|null $user_two_id
@api
*/
class RelationshipRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","comment","contact","first_name","last_name","list_as_parent","parental_access","primary","relationship","resides_with","show_parent","tuition_responsible_signer","type_id","user_one_id","user_one_role","user_two_id"];
}
