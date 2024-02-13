<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The Test Score Id
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\SubTest[] | null
 *   $sub_tests List of Subtests
 * @property string | null $test_name The Test Type
 *
 * @api
 */
class TestType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","sub_tests","test_name"];
}
