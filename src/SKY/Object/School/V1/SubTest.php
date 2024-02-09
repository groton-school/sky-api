<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * SubTest Model
 *
 * @property int|null $test_type_id
 * @property string|null $sub_test_type
 * @property double|null $score
 * @property int|null $test_subtype_id
 * @property double|null $percentile
 * @property double|null $scale
 * @property double|null $stanie
 * @api
 */
class SubTest extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["test_type_id","sub_test_type","score","test_subtype_id","percentile","scale","stanie"];
}
