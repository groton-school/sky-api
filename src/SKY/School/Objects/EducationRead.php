<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * EducationRead Model
 *
 * @property int $id The ID of the education
 * @property string | null $degree The degree recieved
 * @property string | null $field The field the major was received in
 * @property string | null $grad_year The graduation year. ex. 2017
 * @property string | null $major The major course(s) of study
 * @property string | null $school The school name
 * @property int | null $sort_order The order the education appears in the UI
 *
 * @api
 */
class EducationRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","degree","field","grad_year","major","school","sort_order"];
}
