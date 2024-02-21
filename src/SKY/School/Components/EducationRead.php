<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * EducationRead Model
 *
 * @property int $id The ID of the education
 * @property ?string $degree The degree recieved
 * @property ?string $field The field the major was received in
 * @property ?string $grad_year The graduation year. ex. 2017
 * @property ?string $major The major course(s) of study
 * @property ?string $school The school name
 * @property ?int $sort_order The order the education appears in the UI
 *
 * @api
 */
class EducationRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "degree",
        "field",
        "grad_year",
        "major",
        "school",
        "sort_order",
    ];
}
