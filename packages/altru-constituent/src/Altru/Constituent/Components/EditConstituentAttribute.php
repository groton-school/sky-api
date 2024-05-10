<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentAttribute
 *
 * @property string $header_caption The headercaption. Read-only in the SOAP
 *   API.
 * @property string $attribute_category_description The category. Read-only in
 *   the SOAP API.
 * @property string $attribute_category_id The attributecategoryid. Read-only
 *   in the SOAP API.
 * @property int $data_type_code The datatypecode. Read-only in the SOAP API.
 * @property string $string_value The value.
 * @property int $number_value The value.
 * @property float $money_value The value.
 * @property string $date_value The value. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $booleanvalue The value. Available values are *no*, *yes*
 * @property string $code_table_value The value. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $fuzzy_date_value FuzzyDate
 * @property string $constituent_id_value The value.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $hour_minute_value HourMinute
 * @property string $memo_value The value.
 * @property string $comment The comment.
 * @property string $constituent_search_list_catalog_id The constituent search
 *   list catalog ID. Read-only in the SOAP API.
 * @property string $code_table_name The code table name. Read-only in the
 *   SOAP API.
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $currency The currency. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/13612288-b37e-409d-ba52-6ab31637ddd6?parameters=transaction\_currency\_id,{transaction\_currency\_id}&amp;parameters=base\_currency\_id,{base\_currency\_id}&amp;parameters=current\_currency\_id,{currencyid}.
 * @property string $transaction_currency_id The transaction currency.
 *   Read-only in the SOAP API.
 * @property string $base_currency_id The base currency. Read-only in the SOAP
 *   API.
 *
 * @api
 */
class EditConstituentAttribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "header_caption" => "string",
        "attribute_category_description" => "string",
        "attribute_category_id" => "string",
        "data_type_code" => "int",
        "string_value" => "string",
        "number_value" => "int",
        "money_value" => "float",
        "date_value" => "string",
        "booleanvalue" => "string",
        "code_table_value" => "string",
        "fuzzy_date_value" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "constituent_id_value" => "string",
        "hour_minute_value" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "memo_value" => "string",
        "comment" => "string",
        "constituent_search_list_catalog_id" => "string",
        "code_table_name" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "currency" => "string",
        "transaction_currency_id" => "string",
        "base_currency_id" => "string",
    ];
}
