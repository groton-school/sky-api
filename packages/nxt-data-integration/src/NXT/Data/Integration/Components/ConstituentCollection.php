<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of constituent list entries.
 *
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentSearchResult[]
 *   $results The set of items included in the response. This may be a subset of
 *   the items in the collection.
 *
 * @api
 */
class ConstituentCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "results" => "\Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentSearchResult[]",
    ];
}
