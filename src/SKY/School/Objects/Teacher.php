<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Academic Teacher Model
 *
 * @property int | null $id The user ID for the teacher
 * @property bool | null $head The head teacher indicator
 * @property string | null $name The firstname and lastname of the teacher
 * @property string | null $firstname The first name of the teacher
 * @property string | null $lastname The last name of the teacher
 * @property string | null $preferred_name The teachers preferred name
 * @property string | null $formatted_name The formatted name of the teacher. 
 *   If the teacher has a preferred name, it is used in place of the first
 *   name.
 * @property string | null $email The teacher's email address
 * @property string | null $cell_phone The teacher's cellular phone
 *
 * @api
 */
class Teacher extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name","firstname","lastname","preferred_name","formatted_name","email","cell_phone"];
}
