<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListEducations
 *
 * @property string $id The ID.
 * @property string $program The program.
 * @property string $name The educational institution.
 * @property string $degree The degree.
 * @property int $class_of The class of.
 * @property string $constituency_status The status.
 * @property bool $primary_record Indicates whether primary education.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $start_date
 *   FuzzyDate
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $end_date
 *   FuzzyDate
 * @property string $end_date_string The date to.
 * @property string $education_history_status The status.
 * @property bool $affiliated Indicates whether affiliated.
 *
 * @api
 */
class EducationListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "program" => "string",
        "name" => "string",
        "degree" => "string",
        "class_of" => "int",
        "constituency_status" => "string",
        "primary_record" => "bool",
        "start_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "end_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "end_date_string" => "string",
        "education_history_status" => "string",
        "affiliated" => "bool",
    ];
}
