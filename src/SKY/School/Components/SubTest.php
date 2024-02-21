<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * SubTest Model
 *
 * @property ?int $test_type_id The Test Type ID
 * @property ?string $sub_test_type The SubTest Type
 * @property ?float $score The SubTest Score
 * @property ?int $test_subtype_id The SubTest Type Id
 * @property ?float $percentile The SubTest Percentile
 * @property ?float $scale The SubTest Scale
 * @property ?float $stanie The SubTest Stanie
 *
 * @api
 */
class SubTest extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "test_type_id",
        "sub_test_type",
        "score",
        "test_subtype_id",
        "percentile",
        "scale",
        "stanie",
    ];
}
