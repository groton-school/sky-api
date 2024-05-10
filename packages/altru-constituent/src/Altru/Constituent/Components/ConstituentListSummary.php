<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListPatronData
 *
 * @property string $id The ID.
 * @property string $sales_order_id The salesorderid.
 * @property string $refund_date The refund date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property float $refund_total The refund amount.
 * @property string $refund_items The refund items.
 * @property string $transaction_date The order date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $order_number The order number.
 * @property float $order_total The order total.
 *
 * @api
 */
class ConstituentListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "sales_order_id" => "string",
        "refund_date" => "string",
        "refund_total" => "float",
        "refund_items" => "string",
        "transaction_date" => "string",
        "order_number" => "string",
        "order_total" => "float",
    ];
}
