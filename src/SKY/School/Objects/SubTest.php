<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * SubTest Model
 *
 * @property int | null $test_type_id The Test Type ID
 * @property string | null $sub_test_type The SubTest Type
 * @property double | null $score The SubTest Score
 * @property int | null $test_subtype_id The SubTest Type Id
 * @property double | null $percentile The SubTest Percentile
 * @property double | null $scale The SubTest Scale
 * @property double | null $stanie The SubTest Stanie
 *
 * @api
 */
class SubTest extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["test_type_id","sub_test_type","score","test_subtype_id","percentile","scale","stanie"];
}
