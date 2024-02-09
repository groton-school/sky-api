<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* OccupationRead Model
*
* @property int|null $id
* @property string|null $begin_date
* @property string|null $business_name
* @property bool $current
* @property string|null $end_date
* @property string|null $industry
* @property string|null $job_function
* @property bool $matching_gift
* @property string|null $organization
* @property string|null $parent_company
* @property string|null $profession
* @property string|null $specialty
* @property string|null $title
* @property string|null $url
* @property int|null $user_id
* @property int|null $years_employed
@api
*/
class OccupationRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","business_name","current","end_date","industry","job_function","matching_gift","organization","parent_company","profession","specialty","title","url","user_id","years_employed"];
}
