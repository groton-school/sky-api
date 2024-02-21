<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * OccupationRead Model
 *
 * @property ?int $id The ID of the occupation
 * @property ?string $begin_date The begin date of the occupation; Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $business_name The business name
 * @property bool $current Returns True if the user is currently employed at
 *   the occupation
 * @property ?string $end_date The end date of the occupation; Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $industry The industry
 * @property ?string $job_function The function of the job*
 * @property bool $matching_gift Returns True if the organization matches
 *   gifts
 * @property ?string $organization The organization
 * @property ?string $parent_company The businesses' parent company
 * @property ?string $profession The name of the profession
 * @property ?string $specialty The specialization
 * @property ?string $title The job title
 * @property ?string $url The URL of the business
 * @property ?int $user_id The ID of the user that the occupation belongs to
 * @property ?int $years_employed The number of years employed
 *
 * @api
 */
class OccupationRead extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "begin_date",
        "business_name",
        "current",
        "end_date",
        "industry",
        "job_function",
        "matching_gift",
        "organization",
        "parent_company",
        "profession",
        "specialty",
        "title",
        "url",
        "user_id",
        "years_employed",
    ];
}
