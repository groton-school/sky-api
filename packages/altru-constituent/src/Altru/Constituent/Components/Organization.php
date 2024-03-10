<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetOrganization
 *
 * @property string $organization_name The name.
 * @property string $industry The industry. This codetable can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/industrycode/entries
 * @property int $num_employees The no. of employees.
 * @property int $num_subsidiaries The no. of subsidiary orgs.
 * @property string $parent_corp_id The parent org.
 * @property string $picture The image.
 * @property string $picture_thumbnail The image thumbnail.
 * @property bool $picture_changed Indicates whether picture changed?.
 * @property string $web_address The website.
 * @property bool $is_primary Indicates whether this is a primary
 *   organization.
 * @property string $primary_address_id The primary address id.
 * @property string $address_type The address type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries

 * @property string $address_country The country. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba.
 * @property string $address_block The address.
 * @property string $address_city The city.
 * @property string $address_state The state. This simple list can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters=country\_id,{address\_country\_id}.
 * @property string $address_postcode The zip.
 * @property bool $address_do_not_mail Indicates whether do not send mail to
 *   this address.
 * @property string $address_do_not_mail_reason The reason. This codetable can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries
 * @property string $primary_phone_id The primary phone id.
 * @property string $phone_type The phone type. This codetable can be queried
 *   at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries

 * @property string $phone_number The phone number.
 * @property string $primary_email_address_id The primary email address id.
 * @property string $email_address_type The email type. This codetable can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries
 * @property string $email_address The email address.
 *
 * @api
 */
class Organization extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "organization_name" => "string",
        "industry" => "string",
        "num_employees" => "int",
        "num_subsidiaries" => "int",
        "parent_corp_id" => "string",
        "picture" => "string",
        "picture_thumbnail" => "string",
        "picture_changed" => "bool",
        "web_address" => "string",
        "is_primary" => "bool",
        "primary_address_id" => "string",
        "address_type" => "string",
        "address_country" => "string",
        "address_block" => "string",
        "address_city" => "string",
        "address_state" => "string",
        "address_postcode" => "string",
        "address_do_not_mail" => "bool",
        "address_do_not_mail_reason" => "string",
        "primary_phone_id" => "string",
        "phone_type" => "string",
        "phone_number" => "string",
        "primary_email_address_id" => "string",
        "email_address_type" => "string",
        "email_address" => "string",
    ];
}
