<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowApplicationsolicitorsSolicitors
 *
 * @property string $id id
 * @property string $constituent_id solicitor
 * @property float $amount amount
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowApplicationsolicitorsSolicitors extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "constituent_id" => "string",
        "amount" => "float",
        "base_currency_id" => "string",
    ];
}
