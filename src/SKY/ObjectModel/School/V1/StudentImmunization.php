<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student immunization
*
* @property string $immunization_type
* @property string|null $immunization_date
@api
*/
class StudentImmunization extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["immunization_type","immunization_date"];
}
