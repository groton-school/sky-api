<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $business_name Name of the employing business
 * @property string | null $job_title Employed individuals job title
 * @property string | null $business_url Url of the employing business
 * @property string | null $industry Industry of the employing business
 * @property string | null $organization Maps to the employee's 'Organization'
 *   field
 * @property string | null $occupation Maps to the employee's 'Profession'
 *   field
 * @property string | null $matching_gift Indicates if employer matches
 *   employee donations. Allowed values: Yes, No, No Answer
 * @property string | null $begin_date Employees start date at this business
 * @property string | null $end_date Employees end date at this business
 * @property string | null $specialty Maps to the employee's 'Specialty' field
 * @property string | null $parent_company Parent company of employing
 *   business
 * @property string | null $job_function Description of the work done by the
 *   employee
 * @property string | null $years_employed Number of years employee has been
 *   at this business
 * @property bool | null $currently_employed Indicates if this is the
 *   individuals current employer
 *
 * @api
 */
class OccupationUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["business_name","job_title","business_url","industry","organization","occupation","matching_gift","begin_date","end_date","specialty","parent_company","job_function","years_employed","currently_employed"];
}
