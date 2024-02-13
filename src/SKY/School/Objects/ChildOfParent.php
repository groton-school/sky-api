<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserRead Model
 *
 * @property int | null $id The ID associated with a user
 * @property bool | null $student_is_active Indicates if the user is an active
 *   student
 * @property string | null $current_grade The current grade of a user
 * @property string | null $grad_year The grad year of a user
 * @property string | null $email The email address of a user
 * @property string | null $first_name The first name of a user
 * @property string | null $last_name The last name of a user
 * @property string | null $middle_name The middle name of a user
 * @property string | null $nick_name The nickname of a user
 *   <b>This field will be deprecated after 90 days.</b>
 * @property string | null $preferred_name The preferred name of the user
 * @property string | null $prefix The prefix of a user
 * @property string | null $suffix The suffix of a user
 *
 * @api
 */
class ChildOfParent extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","student_is_active","current_grade","grad_year","email","first_name","last_name","middle_name","nick_name","preferred_name","prefix","suffix"];
}
