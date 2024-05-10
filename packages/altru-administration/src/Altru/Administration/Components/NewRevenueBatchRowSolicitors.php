<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowSolicitors
 *
 * @property string $constituent_id solicitor
 * @property float $amount amount
 * @property int $sequence sequence
 * @property string $base_currency_id transaction currency
 *
 * @api
 */
class NewRevenueBatchRowSolicitors extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "amount" => "float",
        "sequence" => "int",
        "base_currency_id" => "string",
    ];
}
