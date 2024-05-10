<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentEmailAddresses
 *
 * @property string $id The ID.
 * @property string $email_address The email address.
 * @property string $type The type.
 * @property bool $primary Indicates whether primary.
 * @property string $info_source The information source.
 * @property string $info_source_comments The information source comments.
 * @property string $email_address_type_code_id The email address type code
 *   ID.
 * @property string $start_date The startdate. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The enddate. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
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
        "info_source" => "string",
        "info_source_comments" => "string",
        "email_address_type_code_id" => "string",
        "start_date" => "string",
        "end_date" => "string",
    ];
}
