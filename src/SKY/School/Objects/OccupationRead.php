<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * OccupationRead Model
 *
 * @property int | null $id The ID of the occupation
 * @property string | null $begin_date The begin date of the occupation; Uses
 *   <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $business_name The business name
 * @property bool $current Returns True if the user is currently employed at
 *   the occupation
 * @property string | null $end_date The end date of the occupation; Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $industry The industry
 * @property string | null $job_function The function of the job*
 * @property bool $matching_gift Returns True if the organization matches
 *   gifts
 * @property string | null $organization The organization
 * @property string | null $parent_company The businesses' parent company
 * @property string | null $profession The name of the profession
 * @property string | null $specialty The specialization
 * @property string | null $title The job title
 * @property string | null $url The URL of the business
 * @property int | null $user_id The ID of the user that the occupation
 *   belongs to
 * @property int | null $years_employed The number of years employed
 *
 * @api
 */
class OccupationRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","business_name","current","end_date","industry","job_function","matching_gift","organization","parent_company","profession","specialty","title","url","user_id","years_employed"];
}
