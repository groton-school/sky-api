<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentRevenueConstituentrevenuerecent
 *
 * @property string $id revenue split id
 * @property string $date date
 * @property string $type type
 * @property float $amount amount
 * @property string $currency_id currency id
 * @property bool $given_anonymously given anonymously
 *
 * @api
 */
class ConstituentRevenueConstituentrevenuerecent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "date" => "string",
        "type" => "string",
        "amount" => "float",
        "currency_id" => "string",
        "given_anonymously" => "bool",
    ];
}
