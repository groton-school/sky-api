<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A collection of items. Data lists can contain paginated results.
 *
 * @property int $count The number of items available for retrieval into the
 *   collection after applying any request parameters.
 * @property \Blackbaud\SKY\Altru\Administration\Components\SiteSearchSummary[]
 *   $value The set of items included in the response. This may be a subset of
 *   the items in the collection.
 *
 * @api
 */
class SiteSearchCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\Altru\Administration\Components\SiteSearchSummary[]",
    ];
}
