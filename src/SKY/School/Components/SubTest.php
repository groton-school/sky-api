<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class SubTest extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "test_type_id" => "int",
        "sub_test_type" => "string",
        "score" => "float",
        "test_subtype_id" => "int",
        "percentile" => "float",
        "scale" => "float",
        "stanie" => "float",
    ];
}
