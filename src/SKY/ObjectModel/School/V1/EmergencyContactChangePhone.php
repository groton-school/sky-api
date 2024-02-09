<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Emergency Contact Change Phone Model
*
* @property bool $active
* @property string|null $call_dialer
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $phone_number
* @property string|null $phone_type
* @property string|null $relationship
* @property int|null $sort_order
@api
*/
class EmergencyContactChangePhone extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["active","call_dialer","first_name","last_name","phone_number","phone_type","relationship","sort_order"];
}
