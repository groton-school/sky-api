<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property SubTest[]|null $sub_tests
 * @property string|null $test_name
 * @api
 */
class TestType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","sub_tests","test_name"];
}
