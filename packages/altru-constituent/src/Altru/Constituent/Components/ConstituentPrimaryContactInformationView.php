<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewConstituentPrimaryContactInformation
 *
 * @property string $address_type_label The addresstypelabel.
 * @property string $address_type_id The addresstypeid.
 * @property string $address The address.
 * @property string $city The city.
 * @property string $state_id The stateid.
 * @property string $post_code The postcode.
 * @property string $country_id The countryid.
 * @property string $phone_type_label The phonetypelabel.
 * @property string $phone_type_id The phonetypeid.
 * @property string $phone The phone.
 * @property string $email_type_label The emailtypelabel.
 * @property string $email_type_id The emailtypeid.
 * @property string $email The email.
 * @property string $web_address The webaddress.
 * @property bool $do_not_mail Indicates whether donotmail.
 * @property string $do_not_mail_reason_code_id The donotmailreasoncodeid.
 * @property bool $do_not_call Indicates whether donotcall.
 * @property bool $do_not_email Indicates whether donotemail.
 * @property bool $confidential Indicates whether isconfidential.
 * @property string $do_not_call_reason_code_id The donotcallreasoncodeid.
 * @property bool $phone_is_confidential Indicates whether
 *   phoneisconfidential.
 *
 * @api
 */
class ConstituentPrimaryContactInformationView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "address_type_label" => "string",
        "address_type_id" => "string",
        "address" => "string",
        "city" => "string",
        "state_id" => "string",
        "post_code" => "string",
        "country_id" => "string",
        "phone_type_label" => "string",
        "phone_type_id" => "string",
        "phone" => "string",
        "email_type_label" => "string",
        "email_type_id" => "string",
        "email" => "string",
        "web_address" => "string",
        "do_not_mail" => "bool",
        "do_not_mail_reason_code_id" => "string",
        "do_not_call" => "bool",
        "do_not_email" => "bool",
        "confidential" => "bool",
        "do_not_call_reason_code_id" => "string",
        "phone_is_confidential" => "bool",
    ];
}
