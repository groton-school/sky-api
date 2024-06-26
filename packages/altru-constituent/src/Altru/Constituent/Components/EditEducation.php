<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditEducation
 *
 * @property bool $primary_record Indicates whether primary education
 *   information.
 * @property string $educational_institution_id The educational institution.
 * @property string $academic_catalog_program The program. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/d411c16b-8bcf-4fc8-a747-754e1e89e9bc?parameters=educational\_institution\_id,{educational\_institution\_id}.
 * @property string $educational_program The program. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalprogramcode/entries
 * @property string $constituency_status The status. Available values are
 *   *unknown*, *currently attending*, *incomplete*, *graduated*
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $date_graduated FuzzyDate
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $date_left
 *   FuzzyDate
 * @property string $academic_catalog_degree The degree. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/73c67942-07ad-412e-8596-a042e5e68002?parameters=academiccatalogprogramid,{academiccatalogprogramid}.
 * @property string $educational_degree The degree. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldegreecode/entries
 * @property string $educational_award The honor awarded. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalawardcode/entries
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $start_date
 *   FuzzyDate
 * @property int $class_year The class of.
 * @property int $preferred_class_year The preferred class of.
 * @property string $educational_source The information source. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalsourcecode/entries
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $educational_source_date FuzzyDate
 * @property string $comment The comments.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\EditEducationAffiliatedAdditionalInformation[]
 *   $affiliated_additional_information Affiliated additional information.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\EditEducationUnaffiliatedAdditionalInformation[]
 *   $unaffiliated_additional_information Unaffiliated additional information.
 * @property bool $affiliated Indicates whether affiliated.
 * @property string $educational_history_level The level. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistorylevelcode/entries
 * @property string $educational_history_reason The reason. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistoryreasoncode/entries
 * @property bool $use_academic_catalog Indicates whether use academic
 *   catalog. Read-only in the SOAP API.
 * @property string $educational_history_status The status. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/086c5bfb-1a80-46cf-a2f5-05ef51120891.
 *
 * @api
 */
class EditEducation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "primary_record" => "bool",
        "educational_institution_id" => "string",
        "academic_catalog_program" => "string",
        "educational_program" => "string",
        "constituency_status" => "string",
        "date_graduated" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "date_left" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "academic_catalog_degree" => "string",
        "educational_degree" => "string",
        "educational_award" => "string",
        "start_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "class_year" => "int",
        "preferred_class_year" => "int",
        "educational_source" => "string",
        "educational_source_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "comment" => "string",
        "affiliated_additional_information" => "\Blackbaud\SKY\Altru\Constituent\Components\EditEducationAffiliatedAdditionalInformation[]",
        "unaffiliated_additional_information" => "\Blackbaud\SKY\Altru\Constituent\Components\EditEducationUnaffiliatedAdditionalInformation[]",
        "affiliated" => "bool",
        "educational_history_level" => "string",
        "educational_history_reason" => "string",
        "use_academic_catalog" => "bool",
        "educational_history_status" => "string",
    ];
}
