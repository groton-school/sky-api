<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * EducationUpdate Model
 *
 * @property string | null $school The name of the school.
 * @property string | null $degree The degree or diploma earned.
 * @property string | null $major The major declared for the degree.
 * @property string | null $field The field of study at the school.
 * @property string | null $grad_year The graduation year.
 * @property string | null $sort_order The order to list the school.
 *
 * @api
 */
class EducationUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["school","degree","major","field","grad_year","sort_order"];
}
