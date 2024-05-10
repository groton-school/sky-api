<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchEducations
 *
 * @property string $id The ID.
 * @property string $full_name_educational_institution The full
 *   name\\educational institution.
 * @property string $constituent_name The constituent name.
 * @property string $constituent_lookup_id The constituent lookup ID.
 * @property string $constituent_address The constituent address.
 * @property string $constituent_city The constituent city.
 * @property string $constituent_state The constituent state.
 * @property string $constituent_post_code The constituent zip/postal code.
 * @property string $educational_institution The educational institution.
 * @property string $program The program.
 * @property string $degree The degree.
 * @property string $status The status.
 * @property string $class_year The class year.
 * @property string $educational_history_status The status.
 *
 * @api
 */
class EducationSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "full_name_educational_institution" => "string",
        "constituent_name" => "string",
        "constituent_lookup_id" => "string",
        "constituent_address" => "string",
        "constituent_city" => "string",
        "constituent_state" => "string",
        "constituent_post_code" => "string",
        "educational_institution" => "string",
        "program" => "string",
        "degree" => "string",
        "status" => "string",
        "class_year" => "string",
        "educational_history_status" => "string",
    ];
}
