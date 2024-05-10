<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowNewConstituent
 *
 * @property bool $organization is organization
 * @property bool $group is group
 * @property bool $household is household
 * @property string $last_name last\\org\\group\\household name
 * @property string $first_name first name
 * @property string $middle_name middle name
 * @property string $title The title. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $suffix The suffix. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $nick_name nickname
 * @property string $maiden_name maiden name
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $birthdate FuzzyDate
 * @property string $gender The gender. Available values are *unknown*,
 *   *male*, *female*, *other*
 * @property string $marital_status The marital status. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/maritalstatuscode/entries
 * @property string $web_address website
 * @property string $industry The industry. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/industrycode/entries
 * @property int $num_employees no. of employees
 * @property int $num_subsidiaries no. of subsidiary orgs
 * @property string $parent_corp_id parent org
 * @property string $address_address_type The address type. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $address_country The country. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property string $address_address_block address
 * @property string $address_city city
 * @property string $address_state The state. This simple list can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=countryid,{address\_countryid}.
 * @property string $address_post_code zip
 * @property bool $address_do_not_mail do not send mail to this address
 * @property string $address_do_not_mail_reason The reason. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $phone_type The phone type. This code table can be queried
 *   at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries

 * @property string $phone_number phone number
 * @property string $email_address_type The email type. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address email address
 * @property bool $existing_spouse existing constituent
 * @property string $spouse_id spouse full name
 * @property string $spouse_last_name spouse last name
 * @property string $spouse_first_name spouse first name
 * @property string $spouse_middle_name spouse middle name
 * @property string $spouse_title The spouse title. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $spouse_suffix The spouse suffix. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property string $spouse_nick_name spouse nickname
 * @property string $spouse_maiden_name spouse maiden name
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $spouse_birthdate FuzzyDate
 * @property string $spouse_gender The spouse gender. Available values are
 *   *unknown*, *male*, *female*, *other*
 * @property string $spouse_relationship_type The spouse relationship type.
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $spouse_reciprocal_type The spouse reciprocal relationship
 *   type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $spouse_start_date spouse start date
 * @property bool $spouse_is_spouse is spouse
 * @property int $spouse_class_of spouse class of
 * @property bool $copy_primary_information copy primary information
 * @property bool $primary_relationship_exists apply recognition credit to
 *   individual for constituent's payments
 * @property float $primary_match_factor primary recognition credit factor
 * @property bool $reciprocal_relationship_exists apply recognition credit to
 *   constituent for individual's payments
 * @property float $reciprocal_match_factor reciprocal recognition credit
 *   factor
 * @property string $existing_business business is existing constituent
 * @property string $business_id org name
 * @property string $business_name business organization name
 * @property string $business_address_type The business address type. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $business_country The business country. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property string $business_address_block business address
 * @property string $business_city business city
 * @property string $business_state The business state. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=countryid,{address\_countryid}.
 * @property string $business_post_code business zip
 * @property bool $business_do_not_mail business do not send mail to this
 *   address
 * @property string $business_phone_type The business phone type. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries
 * @property string $business_number business phone number
 * @property string $business_relationship_type The business relationship
 *   type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $business_reciprocal_type The business reciprocal
 *   relationship type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $business_start_date business start date
 * @property bool $contact is contact
 * @property string $contact_type The contact type. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/contacttypecode/entries

 * @property bool $primary_contact primary contact
 * @property string $position position
 * @property bool $matching_gift_relationship this organization will match
 *   individual's contributions
 * @property bool $gives_anonymously gives anonymously
 * @property string $group_description group\\household description
 * @property string $group_primary_contact group primary contact
 * @property string $group_start_date group start date
 * @property string $group_group_type The group type. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/927b11bc-3f88-44b0-a8fb-cfc1d5c627ea.
 * @property string $household_primary_contact_id existing household primary
 *   contact
 * @property string $household_primary_contact_key_name new household primary
 *   contact last name
 * @property string $household_primary_contact_first_name new household
 *   primary contact first name
 * @property string $household_primary_contact_middle_name new household
 *   primary contact middle initial
 * @property string $household_primary_contact_title The new household primary
 *   contact title. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $household_primary_contact_suffix The new household
 *   primary contact suffix. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property bool $household_primary_contact_copy_household_contact new
 *   household primary contact copy household contact information
 * @property string $household_second_member_id existing second household
 *   member
 * @property string $household_second_member_key_name new second household
 *   member last name
 * @property string $household_second_member_first_name new second household
 *   member first name
 * @property string $household_second_member_middle_name new second household
 *   member middle initial
 * @property string $household_second_member_title The new second household
 *   member title. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries
 * @property string $household_second_member_suffix The new second household
 *   member suffix. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries
 * @property bool $household_second_member_copy_household_contact new second
 *   household member copy household contact information
 * @property string $household_second_member_relationship_reciprocal_type The
 *   household members reciprocal relationship type. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $household_second_member_relationship_relationship_type
 *   The household members relationship type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/relationshiptypecode/entries
 * @property string $household_second_member_relationship_start_date household
 *   members relationship start date
 * @property bool $household_second_member_relationship_is_spouse households
 *   members relationship is spousal
 * @property string $spouse_relationship_type_code_id_simple_list The spouse
 *   relationship type. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4e869c5a-9b9d-4e84-b6e0-1fc66bafbafc?parameters=gender,{gendercode}&amp;parameters=appliestoconstituenttype,{0}.
 * @property string $spouse_reciprocal_type_code_id_simple_list The spouse
 *   reciprocal relationship type. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c3018803-2ea5-4f62-91cf-412e88d15f9b?parameters=appliestoconstituenttype,{0}&amp;parameters=constituent\_id,{spouse\_id}&amp;parameters=appliestorelationshiptypeid,{spouse\_relationshiptypecodeid}&amp;parameters=gender,{spouse\_gendercode}&amp;parameters=relatestoconstituenttype,{0}.
 * @property string $business_relationship_type_code_id_simple_list The
 *   business relationship type. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4e869c5a-9b9d-4e84-b6e0-1fc66bafbafc?parameters=gender,{gendercode}&amp;parameters=appliestoconstituenttype,{0}.
 * @property string $business_reciprocal_type_code_id_simple_list The business
 *   reciprocal relationship type. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c3018803-2ea5-4f62-91cf-412e88d15f9b?parameters=appliestoconstituenttype,{0}&amp;parameters=constituent\_id,{business\_id}&amp;parameters=appliestorelationshiptypeid,{business\_relationshiptypecodeid}&amp;parameters=relatestoconstituenttype,{1}.
 * @property string
 *   $household_second_member_relationship_reciprocal_type_code_id_simple_list
 *   The household members reciprocal relationship type. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4e869c5a-9b9d-4e84-b6e0-1fc66bafbafc?parameters=gender,{gendercode}&amp;parameters=appliestoconstituenttype,{0}.
 * @property string
 *   $household_second_member_relationship_relationship_type_code_id_simple_list
 *   The household members relationship type. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c3018803-2ea5-4f62-91cf-412e88d15f9b?parameters=appliestoconstituenttype,{0}&amp;parameters=constituent\_id,{household\_second\_member\_id}&amp;parameters=appliestorelationshiptypeid,{household\_second\_member\_relationship\_relationship\_type\_code\_id\_simple\_list}&amp;parameters=relatestoconstituenttype,{0}.
 * @property string $business_primary_relationship_exists apply to individual
 *   for revenue from organization
 * @property int $business_primary_match_factor recognition credit match
 *   percent
 * @property string $business_reciprocal_relationship_exists apply to
 *   organization for revenue from individual
 * @property int $business_reciprocal_match_factor recognition credit match
 *   percent
 * @property string $business_primary_recognition_type The recognition credit
 *   type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property string $business_reciprocal_recognition_type The recognition
 *   credit type. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property string $address_id address id
 * @property string $email_address_id email id
 * @property string $phone_id phone id
 * @property string $constituency_code The constituency. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/836499cc-5dc1-4731-9e82-c66fbe64cc69.
 * @property string $site_id constituent site
 * @property string $constituent_security_group The constituent security
 *   group. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/060cd243-2e24-4159-b327-7bb4dd7a8c3b.
 * @property string $info_source_code_id infosourcecodeid
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowNewconstituentNameformats[]
 *   $nameformats Nameformats.
 * @property string $original_first_name original first name
 * @property string $original_last_name original last name
 *
 * @api
 */
class NewRevenueBatchRowNewConstituent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "organization" => "bool",
        "group" => "bool",
        "household" => "bool",
        "last_name" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "title" => "string",
        "suffix" => "string",
        "nick_name" => "string",
        "maiden_name" => "string",
        "birthdate" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "gender" => "string",
        "marital_status" => "string",
        "web_address" => "string",
        "industry" => "string",
        "num_employees" => "int",
        "num_subsidiaries" => "int",
        "parent_corp_id" => "string",
        "address_address_type" => "string",
        "address_country" => "string",
        "address_address_block" => "string",
        "address_city" => "string",
        "address_state" => "string",
        "address_post_code" => "string",
        "address_do_not_mail" => "bool",
        "address_do_not_mail_reason" => "string",
        "phone_type" => "string",
        "phone_number" => "string",
        "email_address_type" => "string",
        "email_address" => "string",
        "existing_spouse" => "bool",
        "spouse_id" => "string",
        "spouse_last_name" => "string",
        "spouse_first_name" => "string",
        "spouse_middle_name" => "string",
        "spouse_title" => "string",
        "spouse_suffix" => "string",
        "spouse_nick_name" => "string",
        "spouse_maiden_name" => "string",
        "spouse_birthdate" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "spouse_gender" => "string",
        "spouse_relationship_type" => "string",
        "spouse_reciprocal_type" => "string",
        "spouse_start_date" => "string",
        "spouse_is_spouse" => "bool",
        "spouse_class_of" => "int",
        "copy_primary_information" => "bool",
        "primary_relationship_exists" => "bool",
        "primary_match_factor" => "float",
        "reciprocal_relationship_exists" => "bool",
        "reciprocal_match_factor" => "float",
        "existing_business" => "string",
        "business_id" => "string",
        "business_name" => "string",
        "business_address_type" => "string",
        "business_country" => "string",
        "business_address_block" => "string",
        "business_city" => "string",
        "business_state" => "string",
        "business_post_code" => "string",
        "business_do_not_mail" => "bool",
        "business_phone_type" => "string",
        "business_number" => "string",
        "business_relationship_type" => "string",
        "business_reciprocal_type" => "string",
        "business_start_date" => "string",
        "contact" => "bool",
        "contact_type" => "string",
        "primary_contact" => "bool",
        "position" => "string",
        "matching_gift_relationship" => "bool",
        "gives_anonymously" => "bool",
        "group_description" => "string",
        "group_primary_contact" => "string",
        "group_start_date" => "string",
        "group_group_type" => "string",
        "household_primary_contact_id" => "string",
        "household_primary_contact_key_name" => "string",
        "household_primary_contact_first_name" => "string",
        "household_primary_contact_middle_name" => "string",
        "household_primary_contact_title" => "string",
        "household_primary_contact_suffix" => "string",
        "household_primary_contact_copy_household_contact" => "bool",
        "household_second_member_id" => "string",
        "household_second_member_key_name" => "string",
        "household_second_member_first_name" => "string",
        "household_second_member_middle_name" => "string",
        "household_second_member_title" => "string",
        "household_second_member_suffix" => "string",
        "household_second_member_copy_household_contact" => "bool",
        "household_second_member_relationship_reciprocal_type" => "string",
        "household_second_member_relationship_relationship_type" => "string",
        "household_second_member_relationship_start_date" => "string",
        "household_second_member_relationship_is_spouse" => "bool",
        "spouse_relationship_type_code_id_simple_list" => "string",
        "spouse_reciprocal_type_code_id_simple_list" => "string",
        "business_relationship_type_code_id_simple_list" => "string",
        "business_reciprocal_type_code_id_simple_list" => "string",
        "household_second_member_relationship_reciprocal_type_code_id_simple_list" => "string",
        "household_second_member_relationship_relationship_type_code_id_simple_list" => "string",
        "business_primary_relationship_exists" => "string",
        "business_primary_match_factor" => "int",
        "business_reciprocal_relationship_exists" => "string",
        "business_reciprocal_match_factor" => "int",
        "business_primary_recognition_type" => "string",
        "business_reciprocal_recognition_type" => "string",
        "address_id" => "string",
        "email_address_id" => "string",
        "phone_id" => "string",
        "constituency_code" => "string",
        "site_id" => "string",
        "constituent_security_group" => "string",
        "info_source_code_id" => "string",
        "nameformats" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowNewconstituentNameformats[]",
        "original_first_name" => "string",
        "original_last_name" => "string",
    ];
}
