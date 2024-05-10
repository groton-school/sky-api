<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateTribute
 *
 * @property string $revenue_id The revenue ID.
 * @property string $tribute_id The tribute.
 * @property float $amount The amount.
 * @property string $designation_id The default designation.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\NewTributeSplits[]
 *   $splits Splits.
 * @property bool $apply_default_designation Indicates whether apply default
 *   designation to revenue.
 * @property bool $revenue_posted Indicates whether isrevenueposted. Read-only
 *   in the SOAP API.
 * @property string $revenue_designation_id The revenuedesignationid.
 *   Read-only in the SOAP API.
 * @property bool $allow_default Indicates whether allowdefault. Read-only in
 *   the SOAP API.
 * @property string $base_currency_id The currency. Read-only in the SOAP API.
 * @property bool $tribute_anonymous Indicates whether do not display on
 *   website.
 * @property bool $friends_asking_friends Indicates whether friends asking
 *   friends. Read-only in the SOAP API.
 *
 * @api
 */
class NewTribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "revenue_id" => "string",
        "tribute_id" => "string",
        "amount" => "float",
        "designation_id" => "string",
        "splits" => "\Blackbaud\SKY\Altru\Constituent\Components\NewTributeSplits[]",
        "apply_default_designation" => "bool",
        "revenue_posted" => "bool",
        "revenue_designation_id" => "string",
        "allow_default" => "bool",
        "base_currency_id" => "string",
        "tribute_anonymous" => "bool",
        "friends_asking_friends" => "bool",
    ];
}
