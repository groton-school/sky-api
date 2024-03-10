<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAttribute
 *
 * @property string $attribute_context_id The attribute context id.
 * @property string $header_caption The headercaption. Read-only in the SOAP
 *   API.
 * @property string $attribute_category The category. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/958132a3-762a-4844-b7a1-f3a3098da95a?parameters=record\_type,{record\_type\_string}.
 * @property string $string_value The value.
 * @property int $number_value The value.
 * @property float $money_value The value.
 * @property string $date_value The value.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $boolean_value The value. Available values are *no*, *yes*
 * @property string $code_table_value The value. This codetable can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $fuzzy_date_value FuzzyDate
 * @property string $constituent_id_value The value.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $hour_minute_value HourMinute
 * @property string $memo_value The value.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAttributeAttributecategories[]
 *   $attribute_categories attribute\_categories
 * @property string $comment The comment.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $record_type_string The record type. Read-only in the SOAP
 *   API.
 * @property string $currency The currency. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/13612288-b37e-409d-ba52-6ab31637ddd6?parameters=transaction\_currency\_id,{transaction\_currency\_id}&amp;parameters=base\_currency\_id,{base\_currency\_id}.
 * @property string $transaction_currency_id The transaction currency.
 *   Read-only in the SOAP API.
 * @property string $base_currency_id The base currency. Read-only in the SOAP
 *   API.
 *
 * @api
 */
class NewConstituentAttribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "attribute_context_id" => "string",
        "header_caption" => "string",
        "attribute_category" => "string",
        "string_value" => "string",
        "number_value" => "int",
        "money_value" => "float",
        "date_value" => "string",
        "boolean_value" => "string",
        "code_table_value" => "string",
        "fuzzy_date_value" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "constituent_id_value" => "string",
        "hour_minute_value" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "memo_value" => "string",
        "attribute_categories" => "\Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAttributeAttributecategories[]",
        "comment" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "record_type_string" => "string",
        "currency" => "string",
        "transaction_currency_id" => "string",
        "base_currency_id" => "string",
    ];
}
