<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Admissions Checklist
*
* @property int|null $id
* @property string|null $description
* @property int|null $next_status_id
@api
*/
class AdmissionsStatuses extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","next_status_id"];
}
