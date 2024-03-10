<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Additional information about an constituent record.
 *
 * @property ?string $matched_alias The matched alias name.
 * @property ?string $matched_email The matched email.
 * @property ?string $matched_phone The matched phone number.
 * @property int $record_id The record id.
 * @property ?string $constituent_id The constituent id.
 * @property ?string $import_id The import id.
 * @property bool $is_constituent Indicates if the record is a constituent.
 * @property bool $is_deceased Indicates if the record is deceased.
 * @property bool $is_inactive Indicates if the record is inactive.
 * @property ?string $last_name The last name.
 * @property ?string $first_name The first name.
 * @property ?string $middle_name The middle name.
 * @property ?string $key_indicator The key indicator for the record.
 * @property ?string $maiden_name The maiden name.
 * @property ?string $org_name The organization name.
 * @property ?string $gender The gender.
 * @property ?string $address_block The address block.
 * @property ?string $address_city_state The address city and state.
 * @property ?string $address_post_code The address post code.
 * @property ?string $primary_email The primary email.
 * @property ?string $primary_phone The primary phone.
 * @property ?string $title1 The title 1.
 * @property ?string $suffix1 The suffix 1.
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate
 *   $birth_date
 * @property ?string $preferred_name The preferred name.
 * @property ?string $spouse_first_name The spouse's first name.
 * @property ?string $spouse_last_name The spouse's last name.
 *
 * @api
 */
class ConstituentSearchResult extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "matched_alias" => "string",
        "matched_email" => "string",
        "matched_phone" => "string",
        "record_id" => "int",
        "constituent_id" => "string",
        "import_id" => "string",
        "is_constituent" => "bool",
        "is_deceased" => "bool",
        "is_inactive" => "bool",
        "last_name" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "key_indicator" => "string",
        "maiden_name" => "string",
        "org_name" => "string",
        "gender" => "string",
        "address_block" => "string",
        "address_city_state" => "string",
        "address_post_code" => "string",
        "primary_email" => "string",
        "primary_phone" => "string",
        "title1" => "string",
        "suffix1" => "string",
        "birth_date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "preferred_name" => "string",
        "spouse_first_name" => "string",
        "spouse_last_name" => "string",
    ];
}
