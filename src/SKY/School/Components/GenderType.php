<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id The ID of the gender type
 * @property ?int $gender_type_id The ID of the gender type specific to the
 *   school
 * @property ?string $code The gender code
 * @property ?string $description The gender description
 * @property ?bool $active True if the gender is active
 * @property ?int $sort_order The sort order of the gender type
 * @property ?string $pronouns The pronouns associated with the gender type
 *
 * @api
 */
class GenderType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "gender_type_id" => "int",
        "code" => "string",
        "description" => "string",
        "active" => "bool",
        "sort_order" => "int",
        "pronouns" => "string",
    ];
}
