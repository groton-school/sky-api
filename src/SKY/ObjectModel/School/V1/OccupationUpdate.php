<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $business_name
* @property string|null $job_title
* @property string|null $business_url
* @property string|null $industry
* @property string|null $organization
* @property string|null $occupation
* @property string|null $matching_gift
* @property string|null $begin_date
* @property string|null $end_date
* @property string|null $specialty
* @property string|null $parent_company
* @property string|null $job_function
* @property string|null $years_employed
* @property bool|null $currently_employed
@api
*/
class OccupationUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["business_name","job_title","business_url","industry","organization","occupation","matching_gift","begin_date","end_date","specialty","parent_company","job_function","years_employed","currently_employed"];
}
