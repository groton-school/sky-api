<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id The Test Score Id
 * @property ?\Blackbaud\SKY\School\Components\SubTest[] $sub_tests List of
 *   Subtests
 * @property ?string $test_name The Test Type
 *
 * @api
 */
class TestType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "sub_tests" => "\Blackbaud\SKY\School\Components\SubTest[]",
        "test_name" => "string",
    ];
}
