<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Academic Teacher Model
 *
 * @property int|null $id
 * @property bool|null $head
 * @property string|null $name
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $preferred_name
 * @property string|null $formatted_name
 * @property string|null $email
 * @property string|null $cell_phone
 * @api
 */
class Teacher extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name","firstname","lastname","preferred_name","formatted_name","email","cell_phone"];
}
