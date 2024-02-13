<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Year Model
 *
 * @property int | null $id The ID of a school year
 * @property string | null $begin_date The begin date in a school year date
 *   range. Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property bool | null $current_year Returns True if Current Year is enabled
 *   for the respective school year
 * @property string | null $end_date The end date in a school year date range.
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property bool | null $published Gets or sets the published flag
 * @property string | null $school_year_label The label used to identify the
 *   range of dates in a school year
 *
 * @api
 */
class Year extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","current_year","end_date","published","school_year_label"];
}
