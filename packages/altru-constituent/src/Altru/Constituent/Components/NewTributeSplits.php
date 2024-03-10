<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewTributeSplits
 *
 * @property string $id id
 * @property string $designation_id designation
 * @property float $amount amount
 * @property string $base_currency_id currency
 *
 * @api
 */
class NewTributeSplits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "designation_id" => "string",
        "amount" => "float",
        "base_currency_id" => "string",
    ];
}
