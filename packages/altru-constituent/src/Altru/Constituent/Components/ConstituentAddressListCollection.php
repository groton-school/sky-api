<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A collection of items. Data lists can contain paginated results.
 *
 * @property int $count The number of items available for retrieval into the
 *   collection after applying any request parameters.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressListSummary[]
 *   $value The set of items included in the response. This may be a subset of
 *   the items in the collection.
 * @property string $infinity_session Values for cookies related to the
 *   Infinity load balancer session.
 * @property string $session_key Session key for paging provided by user in
 *   request query parameter.
 * @property int $total_available_rows The number of total rows available.
 * @property string $more_rows_range_key Key for accessing cached results on
 *   subsequent calls to this data list.
 * @property bool $data_no_longer_available Indicates data is no longer
 *   available in the context of this session.
 *
 * @api
 */
class ConstituentAddressListCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressListSummary[]",
        "infinity_session" => "string",
        "session_key" => "string",
        "total_available_rows" => "int",
        "more_rows_range_key" => "string",
        "data_no_longer_available" => "bool",
    ];
}
