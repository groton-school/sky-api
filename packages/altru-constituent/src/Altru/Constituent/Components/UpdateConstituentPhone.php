<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentPhone
 *
 * @property string $phone_type The type. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries
 * @property string $number The number.
 * @property bool $primary Indicates whether set as primary phone number.
 * @property bool $do_not_call Indicates whether do not call this phone
 *   number.
 * @property string $spouse_name The spouse name. Read-only in the SOAP API.
 * @property bool $spouse_has_matching_phone Indicates whether spouse has
 *   matching phone. Read-only in the SOAP API.
 * @property bool $update_matching_spouse_phone Indicates whether update
 *   matching phone information for household.
 * @property bool $household Indicates whether household. Read-only in the
 *   SOAP API.
 * @property bool $household_member Indicates whether household member.
 *   Read-only in the SOAP API.
 * @property bool $update_matching_household_phone Indicates whether update
 *   matching phone numbers in household.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhoneMatchinghouseholdmembers[]
 *   $matching_household_members matching\_household\_members
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $start_time HourMinute
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute $end_time
 *   HourMinute
 * @property string $info_source The information source. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 * @property string $info_source_comments The comments.
 * @property string $country The country. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay
 *   $seasonal_start_date MonthDay
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay
 *   $seasonal_end_date MonthDay
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $do_not_call_reason The reason. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotcallreasoncode/entries
 * @property bool $confidential Indicates whether this phone number is
 *   confidential.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhoneCountrycodes[]
 *   $country_codes country\_codes
 * @property string $constituent_data_review_rollback_reason The reason. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/484441bc-f0e6-4f5f-a6bf-49f02881dd13.
 * @property bool $forced_primary Indicates whether forced primary. Read-only
 *   in the SOAP API.
 * @property bool $can_edit_primary Indicates whether can edit primary.
 *   Read-only in the SOAP API.
 * @property string $invalid_fields The invalid fields. Read-only in the SOAP
 *   API.
 * @property string $origin The origin. Read-only in the SOAP API. Available
 *   values are *user*, *web forms*
 *
 * @api
 */
class UpdateConstituentPhone extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "phone_type" => "string",
        "number" => "string",
        "primary" => "bool",
        "do_not_call" => "bool",
        "spouse_name" => "string",
        "spouse_has_matching_phone" => "bool",
        "update_matching_spouse_phone" => "bool",
        "household" => "bool",
        "household_member" => "bool",
        "update_matching_household_phone" => "bool",
        "matching_household_members" => "\Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhoneMatchinghouseholdmembers[]",
        "start_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "end_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "info_source" => "string",
        "info_source_comments" => "string",
        "country" => "string",
        "seasonal_start_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "seasonal_end_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "start_date" => "string",
        "end_date" => "string",
        "do_not_call_reason" => "string",
        "confidential" => "bool",
        "country_codes" => "\Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhoneCountrycodes[]",
        "constituent_data_review_rollback_reason" => "string",
        "forced_primary" => "bool",
        "can_edit_primary" => "bool",
        "invalid_fields" => "string",
        "origin" => "string",
    ];
}
