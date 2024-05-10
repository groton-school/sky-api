<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateIndividual
 *
 * @property string $last_name The the constituent's last name. character
 *   limit: 100..
 * @property string $first_name The the constituent's first name. character
 *   limit: 50..
 * @property string $middle_name The the constituent's middle name. character
 *   limit: 50..
 * @property string $title The the constituent's primary title. for
 *   individuals only.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $suffix The the constituent's suffix.. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $nickname The the constituent's nickname. character limit:
 *   50..
 * @property string $maiden_name The the constituent's maiden name. character
 *   limit: 100..
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate $birth_date
 *   FuzzyDate
 * @property string $gender The the constituent's gender.. Available values
 *   are *unknown*, *male*, *female*, *other*
 * @property string $marital_status The the constituent's marital status..
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/maritalstatuscode/entries
 * @property string $address_type The the address type of the constituent's
 *   address.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $address_country The the country of the constituent's
 *   address.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property string $address_block The the constituent's address. character
 *   limit: 150..
 * @property string $address_city The the city of the constituent's address.
 *   character limit: 50..
 * @property string $address_state The the state of the constituent's
 *   address.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=country\_id,{address\_countryid}.
 * @property string $address_post_code The the postal code of the
 *   constituent's address. character limit: 12..
 * @property bool $address_do_not_mail Indicates whether indicates whether the
 *   constituent should not be contacted at this address..
 * @property string $address_do_not_mail_reason The indicates the reason the
 *   constituent should not be contacted at this address.. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $phone_type The the phone type of the constituent's
 *   phone.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries
 * @property string $phone_number The the constituent's phone number..
 * @property string $email_address_type The the email address type of the
 *   constituent's email.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address The the constituent's email address..
 * @property bool $skip_adding_security_groups Indicates whether skip adding
 *   security groups.
 * @property bool $existing_spouse Indicates whether search existing
 *   individuals.
 * @property string $spouse_id The an individual related to the constituent.
 *   this individual will be added to the same household as the constituent..
 * @property string $spouse_last_name The the related individual's last name.
 *   character limit: 100..
 * @property string $spouse_first_name The the related individual's first
 *   name. character limit: 50..
 * @property string $spouse_middle_name The the related individual's middle
 *   name. character limit: 50..
 * @property string $spouse_title The the related individual's title. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $spouse_suffix The the related individual's suffix. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $spouse_nick_name The the related individual's nickname.
 *   character limit: 50..
 * @property string $spouse_maiden_name The the related individual's maiden
 *   name. character limit: 100..
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $spouse_birth_date FuzzyDate
 * @property string $spouse_gender The the related individual's gender..
 *   Available values are *unknown*, *male*, *female*, *other*
 * @property string $spouse_relationship_type_code The the type of
 *   relationship between the constituent and related individual. can be
 *   expressed as, "the individual is the constituent's \_\_\_\_\_\_\_".. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4e869c5a-9b9d-4e84-b6e0-1fc66bafbafc?parameters=gender,{gendercode}&amp;parameters=appliestoconstituenttype,{constituent\_type}.
 * @property string $spouse_reciprocal_type_code The the type of relationship
 *   between the related individual and the constituent. can be expressed as,
 *   "the constituent is the individual's \_\_\_\_\_\_\_".. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c3018803-2ea5-4f62-91cf-412e88d15f9b?parameters=appliestoconstituenttype,{constituent\_type}&amp;parameters=constituentid,{spouse\_id}&amp;parameters=appliestorelationshiptypeid,{spouse\_relationshiptypecodeid}&amp;parameters=gender,{spouse\_gendercode}&amp;parameters=relatestoconstituenttype,{0}.
 * @property string $spouse_start_date The the start date of the
 *   relationship.. Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 * @property bool $copy_primary_information Indicates whether indicates
 *   whether to copy the constituent's primary information to the related
 *   constituent's record..
 * @property bool $primary_soft_credit_relationship_exists Indicates whether
 *   soft credit individual for constituent's payments.
 * @property float $primary_soft_credit_match_factor The recognition match
 *   percent.
 * @property bool $reciprocal_soft_credit_relationship_exists Indicates
 *   whether soft credit constituent for individual's payments.
 * @property float $reciprocal_soft_credit_match_factor The recognition match
 *   percent.
 * @property bool $existing_organization Indicates whether search existing
 *   organizations.
 * @property string $organization_id The the related organization's id..
 * @property string $organization_name The the related organization's name.
 *   character limit: 100..
 * @property string $organization_address_type The the address type of the
 *   related organization's address.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $organization_country The the country of the related
 *   organization's address.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property string $organization_address_block The the related organization's
 *   address. character limit: 150..
 * @property string $organization_city The the city of the related
 *   organization's address. character limit: 50..
 * @property string $organization_state The the state of the related
 *   organization's address.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=country\_id,{organization\_countryid}.
 * @property string $organization_post_code The the postal code of the related
 *   organization's address. character limit: 50..
 * @property bool $organization_do_not_mail Indicates whether indicates
 *   whether the organization should not be contacted at this address..
 * @property string $organization_do_not_mail_reason The indicates the reason
 *   the organization should not be contacted at this address.. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $organization_phone_type The the phone type of the related
 *   organization's phone.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries
 * @property string $organization_number The the related organization's phone
 *   number. character limit: 100..
 * @property string $organization_relationship_type_code The the type of
 *   relationship between the constituent and related organization. can be
 *   expressed as, "the organization is the constituent's \_\_\_\_\_\_\_".. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4e869c5a-9b9d-4e84-b6e0-1fc66bafbafc?parameters=gender,{gendercode}&amp;parameters=appliestoconstituenttype,{constituent\_type}.
 * @property string $organization_reciprocal_type_code The the type of
 *   relationship between the related organization and the constituent. can be
 *   expressed as, "the constituent is the organization's \_\_\_\_\_\_\_".. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c3018803-2ea5-4f62-91cf-412e88d15f9b?parameters=appliestoconstituenttype,{constituent\_type}&amp;parameters=constituentid,{organization\_id}&amp;parameters=appliestorelationshiptypeid,{organization\_relationshiptypecodeid}&amp;parameters=relatestoconstituenttype,{1}.
 * @property string $organization_start_date The the related organization's
 *   start date.. Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 * @property string $organization_end_date The the related organization's end
 *   date.. Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 * @property bool $contact Indicates whether contact.
 * @property string $contact_type The the related organization's contact
 *   type.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/contacttypecode/entries

 * @property bool $primary_contact Indicates whether indicates whether this is
 *   the constituent's primary contact..
 * @property string $position The the constituent's job title. character
 *   limit: 100..
 * @property bool $matching_gift_relationship Indicates whether indicates
 *   whether this organization will match an individual's contributions..
 * @property string $reciprocal_recognition_type The recognition credit type.
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property string $primary_recognition_type The recognition credit type.
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property bool $address_omit_from_validation Indicates whether indicates
 *   the constituent's address is omitted from validation..
 * @property string $address_dpc The address dpc.
 * @property string $address_cart The address cart.
 * @property string $address_lot The address lot.
 * @property string $address_county The address county. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries
 * @property string $address_congressional_district The address congressional
 *   district. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries
 * @property string $address_last_validation_attempt_date The address last
 *   validation attempt date. Uses the format YYYY-MM-DDThh:mm:ss. An example
 *   date: *1955-11-05T22:04:00*.
 * @property string $address_validation_message The address validation
 *   message.
 * @property int $address_certification_data The address certification data.
 * @property bool $organization_omit_from_validation Indicates whether
 *   indicates the organization is omitted from validation..
 * @property string $organization_dpc The organization dpc.
 * @property string $organization_cart The organization cart.
 * @property string $organization_lot The organization lot.
 * @property string $organization_county The organization county. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries
 * @property string $organization_congressional_district The organization
 *   congressional district. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries
 * @property string $organization_last_validation_attempt_date The
 *   organization last validation attempt date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $organization_validation_message The organization
 *   validation message.
 * @property int $organization_certification_data The organization
 *   certification data.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewIndividualValidationCountries[]
 *   $validation_countries Validation countries.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewIndividualZipLookupCountries[]
 *   $zip_lookup_countries Zip lookup countries.
 * @property bool $spouse_relationship Indicates whether indicates whether
 *   this is a spouse relationship with the constituent..
 * @property bool $house_hold_copy_primary_contact_info Indicates whether
 *   indicates whether to copy the individual's primary contact information to
 *   the household..
 * @property string $job_category The the constituent's job category.. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/jobcategorycode/entries

 * @property string $career_level The the constituent's career level.. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/careerlevelcode/entries

 * @property string $address_info_source The the infomation source of the
 *   constituent's address .. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 * @property string $organization_info_source The the infomation source of the
 *   related organization.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 * @property string $title_2 The the constituent's second title.. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $suffix_2 The the related individual's second suffix..
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $spouse_title_2 The the related individual's second
 *   title.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $spouse_suffix_2 The the constituent's second suffix..
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property bool $skip_adding_sites Indicates whether skip adding sites.
 * @property int $constituent_type The the constituent's type.. Read-only in
 *   the SOAP API.
 * @property bool $organization_primary_soft_credit_relationship_exists
 *   Indicates whether indicates whether to apply recognition credits from gifts
 *   made by the organization to the individual..
 * @property float $organization_primary_soft_credit_match_factor The the
 *   match percentage for recognition credits applied to the individual from
 *   gifts made by the organization..
 * @property bool $organization_reciprocal_soft_credit_relationship_exists
 *   Indicates whether apply recognition credits from gifts by the individual to
 *   the organization..
 * @property float $organization_reciprocal_soft_credit_match_factor The the
 *   match percentage for recognition credits applied to the organization from
 *   gifts made by the individual..
 * @property string $organization_primary_recognition_type The the recognition
 *   type of credits applied to the individual from the organization.. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property string $organization_reciprocal_recognition_type The the
 *   recognition type of credits applied to the organization from the
 *   individual.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property bool $opt_out_ads Indicates whether individual opted out of
 *   targeted advertising..
 * @property bool $opt_out_sale Indicates whether individual opted out of sale
 *   of personal data..
 * @property bool $gpc Indicates whether gpc.
 *
 * @api
 */
class NewIndividual extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "last_name" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "title" => "string",
        "suffix" => "string",
        "nickname" => "string",
        "maiden_name" => "string",
        "birth_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "gender" => "string",
        "marital_status" => "string",
        "address_type" => "string",
        "address_country" => "string",
        "address_block" => "string",
        "address_city" => "string",
        "address_state" => "string",
        "address_post_code" => "string",
        "address_do_not_mail" => "bool",
        "address_do_not_mail_reason" => "string",
        "phone_type" => "string",
        "phone_number" => "string",
        "email_address_type" => "string",
        "email_address" => "string",
        "skip_adding_security_groups" => "bool",
        "existing_spouse" => "bool",
        "spouse_id" => "string",
        "spouse_last_name" => "string",
        "spouse_first_name" => "string",
        "spouse_middle_name" => "string",
        "spouse_title" => "string",
        "spouse_suffix" => "string",
        "spouse_nick_name" => "string",
        "spouse_maiden_name" => "string",
        "spouse_birth_date" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "spouse_gender" => "string",
        "spouse_relationship_type_code" => "string",
        "spouse_reciprocal_type_code" => "string",
        "spouse_start_date" => "string",
        "copy_primary_information" => "bool",
        "primary_soft_credit_relationship_exists" => "bool",
        "primary_soft_credit_match_factor" => "float",
        "reciprocal_soft_credit_relationship_exists" => "bool",
        "reciprocal_soft_credit_match_factor" => "float",
        "existing_organization" => "bool",
        "organization_id" => "string",
        "organization_name" => "string",
        "organization_address_type" => "string",
        "organization_country" => "string",
        "organization_address_block" => "string",
        "organization_city" => "string",
        "organization_state" => "string",
        "organization_post_code" => "string",
        "organization_do_not_mail" => "bool",
        "organization_do_not_mail_reason" => "string",
        "organization_phone_type" => "string",
        "organization_number" => "string",
        "organization_relationship_type_code" => "string",
        "organization_reciprocal_type_code" => "string",
        "organization_start_date" => "string",
        "organization_end_date" => "string",
        "contact" => "bool",
        "contact_type" => "string",
        "primary_contact" => "bool",
        "position" => "string",
        "matching_gift_relationship" => "bool",
        "reciprocal_recognition_type" => "string",
        "primary_recognition_type" => "string",
        "address_omit_from_validation" => "bool",
        "address_dpc" => "string",
        "address_cart" => "string",
        "address_lot" => "string",
        "address_county" => "string",
        "address_congressional_district" => "string",
        "address_last_validation_attempt_date" => "string",
        "address_validation_message" => "string",
        "address_certification_data" => "int",
        "organization_omit_from_validation" => "bool",
        "organization_dpc" => "string",
        "organization_cart" => "string",
        "organization_lot" => "string",
        "organization_county" => "string",
        "organization_congressional_district" => "string",
        "organization_last_validation_attempt_date" => "string",
        "organization_validation_message" => "string",
        "organization_certification_data" => "int",
        "validation_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewIndividualValidationCountries[]",
        "zip_lookup_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewIndividualZipLookupCountries[]",
        "spouse_relationship" => "bool",
        "house_hold_copy_primary_contact_info" => "bool",
        "job_category" => "string",
        "career_level" => "string",
        "address_info_source" => "string",
        "organization_info_source" => "string",
        "title_2" => "string",
        "suffix_2" => "string",
        "spouse_title_2" => "string",
        "spouse_suffix_2" => "string",
        "skip_adding_sites" => "bool",
        "constituent_type" => "int",
        "organization_primary_soft_credit_relationship_exists" => "bool",
        "organization_primary_soft_credit_match_factor" => "float",
        "organization_reciprocal_soft_credit_relationship_exists" => "bool",
        "organization_reciprocal_soft_credit_match_factor" => "float",
        "organization_primary_recognition_type" => "string",
        "organization_reciprocal_recognition_type" => "string",
        "opt_out_ads" => "bool",
        "opt_out_sale" => "bool",
        "gpc" => "bool",
    ];
}
