<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowTributes
 *
 * @property string $id id
 * @property string $tribute_id tribute
 * @property float $amount amount
 * @property string $designation_id default designation
 * @property int $sequence sequence
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowTributes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "tribute_id" => "string",
        "amount" => "float",
        "designation_id" => "string",
        "sequence" => "int",
        "base_currency_id" => "string",
    ];
}
