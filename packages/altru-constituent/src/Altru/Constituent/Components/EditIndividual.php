<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditIndividual
 *
 * @property string $last_name The last name.
 * @property string $first_name The first name.
 * @property string $middle_name The middle name.
 * @property string $maiden_name The maiden name.
 * @property string $nickname The nickname.
 * @property string $title The title. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $suffix The suffix. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $gender The gender. Available values are *unknown*,
 *   *male*, *female*, *other*
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $birth_date
 *   FuzzyDate
 * @property int $age The age. Read-only in the SOAP API.
 * @property bool $gives_anonymously Indicates whether gives anonymously.
 * @property string $picture The image.
 * @property string $picture_thumbnail The image.
 * @property bool $picture_changed Indicates whether picture changed.
 * @property string $web_address The website.
 * @property string $marital_status The marital status. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/maritalstatuscode/entries
 * @property string $title_2 The title 2. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $suffix_2 The suffix 2. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property bool $deceased Indicates whether is deceased. Read-only in the
 *   SOAP API.
 * @property bool $optoutads Indicates whether opt out of targeted ads.
 * @property bool $optoutsale Indicates whether opt out of sale.
 * @property bool $gpc Indicates whether gpc.
 *
 * @api
 */
class EditIndividual extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "last_name" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "maiden_name" => "string",
        "nickname" => "string",
        "title" => "string",
        "suffix" => "string",
        "gender" => "string",
        "birth_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "age" => "int",
        "gives_anonymously" => "bool",
        "picture" => "string",
        "picture_thumbnail" => "string",
        "picture_changed" => "bool",
        "web_address" => "string",
        "marital_status" => "string",
        "title_2" => "string",
        "suffix_2" => "string",
        "deceased" => "bool",
        "optoutads" => "bool",
        "optoutsale" => "bool",
        "gpc" => "bool",
    ];
}
