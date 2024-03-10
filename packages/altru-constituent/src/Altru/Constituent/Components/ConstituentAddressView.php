<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewConstituentAddress
 *
 * @property string $address_type The type.
 * @property string $country_id The country id.
 * @property string $country The country.
 * @property string $address_block The address.
 * @property string $city The city.
 * @property string $state The state.
 * @property string $post_code The post code.
 * @property bool $primary Indicates whether is primary.
 * @property bool $do_not_mail Indicates whether do not mail.
 * @property string $do_not_mail_reason_code The do not mail reason code.
 * @property bool $confidential Indicates whether is confidential.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $date_added The date added.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay
 *   $seasonal_start_date MonthDay
 * @property \Blackbaud\SKY\Altru\Constituent\Components\MonthDay
 *   $seasonal_end_date MonthDay
 * @property string $info_source_code The information source.
 * @property string $info_source_comments The comments.
 * @property string $state_abbreviation The state abbreviation.
 *
 * @api
 */
class ConstituentAddressView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "address_type" => "string",
        "country_id" => "string",
        "country" => "string",
        "address_block" => "string",
        "city" => "string",
        "state" => "string",
        "post_code" => "string",
        "primary" => "bool",
        "do_not_mail" => "bool",
        "do_not_mail_reason_code" => "string",
        "confidential" => "bool",
        "start_date" => "string",
        "end_date" => "string",
        "date_added" => "string",
        "seasonal_start_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "seasonal_end_date" => "\Blackbaud\SKY\Altru\Constituent\Components\MonthDay",
        "info_source_code" => "string",
        "info_source_comments" => "string",
        "state_abbreviation" => "string",
    ];
}
