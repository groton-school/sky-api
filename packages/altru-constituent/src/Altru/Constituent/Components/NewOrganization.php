<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateOrganization
 *
 * @property string $name The name.
 * @property string $web_address The website.
 * @property string $picture The image.
 * @property string $picture_thumbnail The picture thumbnail.
 * @property string $industry The industry. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/industrycode/entries
 * @property int $num_employees The no. of employees.
 * @property int $num_subsidiaries The no. of subsidiary orgs.
 * @property string $parent_corp_id The parent org.
 * @property string $address_type The address type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $address_block The address.
 * @property string $address_city The city.
 * @property string $address_state The state. This simple list can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=country\_id,{address\_country\_id}.
 * @property string $address_postcode The zip.
 * @property string $address_country The country. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property bool $address_do_not_mail Indicates whether do not send mail to
 *   this address.
 * @property string $address_do_not_mail_reason The reason. This codetable can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $phone_type The phone type. This codetable can be queried
 *   at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries

 * @property string $phone_number The phone number.
 * @property string $email_address_type The email type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address The email address.
 * @property bool $skip_adding_security_groups Indicates whether skip adding
 *   security groups.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewOrganizationZiplookupcountries[]
 *   $zip_lookup_countries zip\_lookup\_countries
 * @property bool $omit_from_validation Indicates whether omit from
 *   validation.
 * @property string $dpc The dpc.
 * @property string $cart The cart.
 * @property string $lot The lot.
 * @property string $county The county. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries
 * @property string $congressional_district The congressional district. This
 *   codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries
 * @property string $last_validation_attempt_date The last validation attempt
 *   date.Uses the format YYYY-MM-DD. An example date: *2019-11-21*.
 * @property string $validation_message The validation message.
 * @property int $certification_data The certification data.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewOrganizationValidationcountries[]
 *   $validation_countries validation\_countries
 * @property bool $is_primary Indicates whether this is a primary
 *   organization.
 * @property bool $skip_adding_sites Indicates whether skip adding sites.
 * @property string $info_source The information source. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries
 *
 * @api
 */
class NewOrganization extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "web_address" => "string",
        "picture" => "string",
        "picture_thumbnail" => "string",
        "industry" => "string",
        "num_employees" => "int",
        "num_subsidiaries" => "int",
        "parent_corp_id" => "string",
        "address_type" => "string",
        "address_block" => "string",
        "address_city" => "string",
        "address_state" => "string",
        "address_postcode" => "string",
        "address_country" => "string",
        "address_do_not_mail" => "bool",
        "address_do_not_mail_reason" => "string",
        "phone_type" => "string",
        "phone_number" => "string",
        "email_address_type" => "string",
        "email_address" => "string",
        "skip_adding_security_groups" => "bool",
        "zip_lookup_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewOrganizationZiplookupcountries[]",
        "omit_from_validation" => "bool",
        "dpc" => "string",
        "cart" => "string",
        "lot" => "string",
        "county" => "string",
        "congressional_district" => "string",
        "last_validation_attempt_date" => "string",
        "validation_message" => "string",
        "certification_data" => "int",
        "validation_countries" => "\Blackbaud\SKY\Altru\Constituent\Components\NewOrganizationValidationcountries[]",
        "is_primary" => "bool",
        "skip_adding_sites" => "bool",
        "info_source" => "string",
    ];
}
