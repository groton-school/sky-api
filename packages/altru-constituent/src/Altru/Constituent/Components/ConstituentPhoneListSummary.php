<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentPhones
 *
 * @property string $id The ID.
 * @property string $phone_number The phone number.
 * @property string $type The type.
 * @property bool $primary Indicates whether primary.
 * @property string $do_not_call The do not call.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $start_time HourMinute
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute $end_time
 *   HourMinute
 * @property string $info_source The information source.
 * @property string $info_source_comments The information source comments.
 * @property string $country The country.
 * @property string $phone_type_code_id The phone type code ID.
 * @property bool $donotcall Indicates whether donotcall.
 * @property string $start_date The startdate. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The enddate. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 *
 * @api
 */
class ConstituentPhoneListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "phone_number" => "string",
        "type" => "string",
        "primary" => "bool",
        "do_not_call" => "string",
        "start_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "end_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "info_source" => "string",
        "info_source_comments" => "string",
        "country" => "string",
        "phone_type_code_id" => "string",
        "donotcall" => "bool",
        "start_date" => "string",
        "end_date" => "string",
    ];
}
