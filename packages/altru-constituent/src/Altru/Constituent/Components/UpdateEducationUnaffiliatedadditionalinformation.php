<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateEducationUnaffiliatedadditionalinformation
 *
 * @property string $id id
 * @property string $educational_college The college/school. This codetable
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalcollegecode/entries
 * @property string $educational_division The division. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldivisioncode/entries
 * @property string $educational_department The department. This codetable can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldepartmentcode/entries
 * @property string $educational_sub_department The sub department. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalsubdepartmentcode/entries
 * @property string $educational_degree_type The degree type. This codetable
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldegreetypecode/entries
 *
 * @api
 */
class UpdateEducationUnaffiliatedadditionalinformation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "educational_college" => "string",
        "educational_division" => "string",
        "educational_department" => "string",
        "educational_sub_department" => "string",
        "educational_degree_type" => "string",
    ];
}
