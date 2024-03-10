<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Year Model
 *
 * @property ?int $id The ID of a school year
 * @property ?string $begin_date The begin date in a school year date range.
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?bool $current_year Returns True if Current Year is enabled for
 *   the respective school year
 * @property ?string $end_date The end date in a school year date range. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?bool $published Gets or sets the published flag
 * @property ?string $school_year_label The label used to identify the range
 *   of dates in a school year
 *
 * @api
 */
class Year extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "begin_date" => "string",
        "current_year" => "bool",
        "end_date" => "string",
        "published" => "bool",
        "school_year_label" => "string",
    ];
}
