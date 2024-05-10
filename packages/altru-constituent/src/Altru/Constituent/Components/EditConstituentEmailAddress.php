<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditConstituentEmailAddress
 *
 * @property string $email_address_type The type. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address The email address.
 * @property bool $primary Indicates whether set as primary email address.
 * @property bool $do_not_email Indicates whether do not send email to this
 *   address.
 * @property string $spouse_name The spouse name. Read-only in the SOAP API.
 * @property bool $spouse_has_matching_email_address Indicates whether spouse
 *   has matching email address. Read-only in the SOAP API.
 * @property bool $update_matching_spouse_email_address Indicates whether
 *   update matching email information for spouse.
 * @property bool $household Indicates whether household. Read-only in the
 *   SOAP API.
 * @property bool $household_member Indicates whether household member.
 *   Read-only in the SOAP API.
 * @property bool $update_matching_household_email_address Indicates whether
 *   update matching email addresses in household.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentEmailAddressMatchingHouseholdMembers[]
 *   $matching_household_members Matching household members.
 * @property string $info_source The information source. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 * @property string $info_source_comments The comments.
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
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property bool $invalid_email Indicates whether invalid email. Read-only in
 *   the SOAP API.
 * @property string $email_bounced_date The email bounced date. Read-only in
 *   the SOAP API. Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 *
 * @api
 */
class EditConstituentEmailAddress extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "email_address_type" => "string",
        "email_address" => "string",
        "primary" => "bool",
        "do_not_email" => "bool",
        "spouse_name" => "string",
        "spouse_has_matching_email_address" => "bool",
        "update_matching_spouse_email_address" => "bool",
        "household" => "bool",
        "household_member" => "bool",
        "update_matching_household_email_address" => "bool",
        "matching_household_members" => "\Blackbaud\SKY\Altru\Constituent\Components\EditConstituentEmailAddressMatchingHouseholdMembers[]",
        "info_source" => "string",
        "info_source_comments" => "string",
        "constituent_data_review_rollback_reason" => "string",
        "forced_primary" => "bool",
        "can_edit_primary" => "bool",
        "invalid_fields" => "string",
        "origin" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "invalid_email" => "bool",
        "email_bounced_date" => "string",
    ];
}
