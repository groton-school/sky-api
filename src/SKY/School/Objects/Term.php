<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Term Model
 *
 * @property int | null $id The duration ID for the term
 * @property string | null $begin_date The begin date of the term. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $description The description for the term
 * @property string | null $end_date The end date of the term. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $level_description The description of the level for
 *   the term
 * @property int | null $level_id The school level for the term
 * @property int | null $offering_type The offering type for the term
 * @property string | null $school_year_label The label used to identify the
 *   range of dates in a school year
 *
 * @api
 */
class Term extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","description","end_date","level_description","level_id","offering_type","school_year_label"];
}
