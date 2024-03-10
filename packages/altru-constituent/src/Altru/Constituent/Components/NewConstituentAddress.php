<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAddress
 *
 * @property string $constituent_id The constituent id.
 * @property string $address_type The type. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $address_block The address.
 * @property string $city The city.
 * @property string $state The state. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=country\_id,{country\_id}.
 * @property string $postcode The zip.
 * @property string $country The country. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property bool $do_not_mail Indicates whether do not send mail to this
 *   address.
 * @property string $cart The cart.
 * @property string $lot The lot.
 * @property string $dpc The dpc.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay $start_date
 *   MonthDay
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay $end_date
 *   MonthDay
 * @property bool $primary Indicates whether set as primary address.
 * @property string $historical_start_date The start date.Uses the format
 *   YYYY-MM-DD. An example date: *2019-11-21*.
 * @property bool $recent_move Indicates whether recently moved/changed from
 *   this address?.
 * @property string $old_address The old address. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/bc075172-8103-4ccb-8285-658180e603a1?parameters=constituent\_id,{constituent\_id}.
 * @property string $spouse_name The spouse name. Read-only in the SOAP API.
 * @property bool $update_matching_spouse_addresses Indicates whether update
 *   matching address information for spouse.
 * @property bool $omit_from_validation Indicates whether omit this address
 *   from validation.
 * @property string $county The county. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries
 * @property string $congressional_district The congressional district. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries
 * @property string $state_house_district The state house district. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/statehousedistrictcode/entries
 * @property string $state_senate_district The state senate district. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/statesenatedistrictcode/entries
 * @property string $local_precinct The local precinct. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/localprecinctcode/entries
 * @property string $info_source The information source. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 * @property string $region The region. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/regioncode/entries
 * @property string $last_validation_attempt_date The last attempt.Uses the
 *   format YYYY-MM-DD. An example date: *2019-11-21*.
 * @property string $validation_message The validation message.
 * @property int $certification_data The certification data.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddressZiplookupcountries[]
 *   $zip_lookup_countries zip\_lookup\_countries
 * @property bool $household Indicates whether household. Read-only in the
 *   SOAP API.
 * @property bool $household_member Indicates whether household member.
 *   Read-only in the SOAP API.
 * @property bool $update_matching_household_addresses Indicates whether copy
 *   address information to household members.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddressValidationcountries[]
 *   $validation_countries validation\_countries
 * @property string $do_not_mail_reason The reason. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $info_source_comments The comments.
 * @property bool $confidential Indicates whether this address is
 *   confidential.
 * @property string $constituent_data_review_rollback_reason The reason. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/484441bc-f0e6-4f5f-a6bf-49f02881dd13.
 * @property bool $forced_primary Indicates whether forced primary. Read-only
 *   in the SOAP API.
 * @property bool $can_edit_primary Indicates whether can edit primary.
 *   Read-only in the SOAP API.
 * @property string $invalid_fields The invalid fields. Read-only in the SOAP
 *   API.
 * @property string $origin The origin. Available values are *user*, *web
 *   forms*
 *
 * @api
 */
class NewConstituentAddress extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "address_type" => "string",
        "address_block" => "string",
        "city" => "string",
        "state" => "string",
        "postcode" => "string",
        "country" => "string",
        "do_not_mail" => "bool",
        "cart" => "string",
        "lot" => "string",
        "dpc" => "string",
        "start_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "end_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "primary" => "bool",
        "historical_start_date" => "string",
        "recent_move" => "bool",
        "old_address" => "string",
        "spouse_name" => "string",
        "update_matching_spouse_addresses" => "bool",
        "omit_from_validation" => "bool",
        "county" => "string",
        "congressional_district" => "string",
        "state_house_district" => "string",
        "state_senate_district" => "string",
        "local_precinct" => "string",
        "info_source" => "string",
        "region" => "string",
        "last_validation_attempt_date" => "string",
        "validation_message" => "string",
        "certification_data" => "int",
        "zip_lookup_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddressZiplookupcountries[]",
        "household" => "bool",
        "household_member" => "bool",
        "update_matching_household_addresses" => "bool",
        "validation_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddressValidationcountries[]",
        "do_not_mail_reason" => "string",
        "info_source_comments" => "string",
        "confidential" => "bool",
        "constituent_data_review_rollback_reason" => "string",
        "forced_primary" => "bool",
        "can_edit_primary" => "bool",
        "invalid_fields" => "string",
        "origin" => "string",
    ];
}
