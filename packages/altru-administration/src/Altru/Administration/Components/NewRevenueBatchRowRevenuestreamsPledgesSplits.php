<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsPledgesSplits
 *
 * @property string $id id
 * @property string $designation_id designation
 * @property float $amount amount
 * @property int $application_code application code
 * @property int $type_code type code
 * @property bool $declines_gift_aid declines gift aid
 * @property string $transaction_currency_id transaction currency
 * @property string $sponsorship_id sponsorship id
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsPledgesSplits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "designation_id" => "string",
        "amount" => "float",
        "application_code" => "int",
        "type_code" => "int",
        "declines_gift_aid" => "bool",
        "transaction_currency_id" => "string",
        "sponsorship_id" => "string",
    ];
}
