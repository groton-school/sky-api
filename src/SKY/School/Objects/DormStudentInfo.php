<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $grad_year 
 *
 * @api
 */
class DormStudentInfo extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["grad_year"];
}
