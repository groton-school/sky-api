<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * EducationAdd Model
 *
 * @property string $school The name of the school.
 * @property string $degree The degree or diploma earned.
 * @property string $major The major declared for the degree.
 * @property string $field The field of study at the school.
 * @property int $grad_year The graduation year.
 * @property int $sort_order The order to list the school.
 *
 * @api
 */
class EducationAdd extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "school",
        "degree",
        "major",
        "field",
        "grad_year",
        "sort_order",
    ];
}
