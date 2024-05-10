<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRecognitions
 *
 * @property string $id id
 * @property string $revenue_recognition_type The recognition credit type.
 *   This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuerecognitiontypecode/entries
 * @property string $constituent_id constituent
 * @property string $effective_date effective date
 * @property float $amount amount
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowRecognitions extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "revenue_recognition_type" => "string",
        "constituent_id" => "string",
        "effective_date" => "string",
        "amount" => "float",
        "base_currency_id" => "string",
    ];
}
