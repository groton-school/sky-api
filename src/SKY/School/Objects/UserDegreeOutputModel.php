<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $user_id The Id of the user for whom this data belongs
 * @property string | null $first_name 
 * @property string | null $last_name 
 * @property string | null $preferred_name 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\DegreeOutputModel[] |
 *   null $student_degrees The list of degrees for the user
 *
 * @api
 */
class UserDegreeOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","preferred_name","student_degrees"];
}
