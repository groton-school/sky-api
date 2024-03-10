<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentEmailAddress
 *
 * @property string $constituent_id The constituent id.
 * @property string $email_address_type The type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address The email address.
 * @property bool $primary Indicates whether set as primary email address.
 * @property string $spouse_name The spouse name. Read-only in the SOAP API.
 * @property bool $update_matching_spouse_email_address Indicates whether
 *   update matching email information for spouse.
 * @property bool $household Indicates whether household. Read-only in the
 *   SOAP API.
 * @property bool $household_member Indicates whether household member.
 *   Read-only in the SOAP API.
 * @property bool $update_matching_household_email_address Indicates whether
 *   copy email address information to household members.
 * @property bool $do_not_email Indicates whether do not send email to this
 *   address.
 * @property string $info_source The information source. This codetable can be
 *   queried at
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
 * @property string $origin The origin. Available values are *user*, *web
 *   forms*
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 *
 * @api
 */
class NewConstituentEmailAddress extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "email_address_type" => "string",
        "email_address" => "string",
        "primary" => "bool",
        "spouse_name" => "string",
        "update_matching_spouse_email_address" => "bool",
        "household" => "bool",
        "household_member" => "bool",
        "update_matching_household_email_address" => "bool",
        "do_not_email" => "bool",
        "info_source" => "string",
        "info_source_comments" => "string",
        "constituent_data_review_rollback_reason" => "string",
        "forced_primary" => "bool",
        "can_edit_primary" => "bool",
        "invalid_fields" => "string",
        "origin" => "string",
        "start_date" => "string",
    ];
}
