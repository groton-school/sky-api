<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Term Model
 *
 * @property int $id The duration ID for the term
 * @property string $begin_date The begin date of the term. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property string $description The description for the term
 * @property string $end_date The end date of the term. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property string $level_description The description of the level for the
 *   term
 * @property int $level_id The school level for the term
 * @property int $offering_type The offering type for the term
 * @property string $school_year_label The label used to identify the range of
 *   dates in a school year
 *
 * @api
 */
class Term extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "begin_date",
        "description",
        "end_date",
        "level_description",
        "level_id",
        "offering_type",
        "school_year_label",
    ];
}
