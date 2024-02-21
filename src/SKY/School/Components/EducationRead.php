<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class EducationRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "degree" => "string",
        "field" => "string",
        "grad_year" => "string",
        "major" => "string",
        "school" => "string",
        "sort_order" => "int",
    ];
}
