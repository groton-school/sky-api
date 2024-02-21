<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A Collection
 *
 * @property int $count The number of items in the collection
 * @property ?string $next_link For paginated responses, the URI for the next
 *   page of results
 * @property ?\Blackbaud\SKY\School\Components\GradeLevel[] $value The set of
 *   items included in the response. This may be a subset of the items in the
 *   collection
 *
 * @api
 */
class GradeLevelCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "next_link" => "string",
        "value" => "\Blackbaud\SKY\School\Components\GradeLevel[]",
    ];
}
