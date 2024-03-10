<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentEmailAddress
 *
 * @property string $id The id.
 * @property string $email_address The email address.
 * @property string $type The type.
 * @property bool $primary Indicates whether primary.
 * @property string $do_not_email The do not email.
 * @property string $info_source The information source.
 * @property string $info_source_comments The information source comments.
 * @property string $email_address_type_code_id The email address type code
 *   id.
 * @property bool $donotemail Indicates whether donotemail.
 * @property string $start_date The startdate.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The enddate.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 *
 * @api
 */
class ConstituentEmailAddressListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "email_address" => "string",
        "type" => "string",
        "primary" => "bool",
        "do_not_email" => "string",
        "info_source" => "string",
        "info_source_comments" => "string",
        "email_address_type_code_id" => "string",
        "donotemail" => "bool",
        "start_date" => "string",
        "end_date" => "string",
    ];
}
