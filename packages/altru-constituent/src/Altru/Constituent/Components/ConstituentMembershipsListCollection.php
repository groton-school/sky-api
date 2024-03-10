<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Fetching data all at once quickly becomes unmanageable. The collection
 * entity helps by returning paginated chunks of large data sets. This entity
 * includes helpful metadata and properties to paginate and iterate through
 * the data.
 *
 * @property int $count The number of items available for retrieval into the
 *   collection after applying any request parameters.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentMembershipsListSummary[]
 *   $value The set of items included in the response. This may be a subset of
 *   the items in the collection.
 *
 * @api
 */
class ConstituentMembershipsListCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentMembershipsListSummary[]",
    ];
}
