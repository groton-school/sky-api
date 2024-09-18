<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * TestScores Model
 *
 * @property ?int $id The Test Score Id
 * @property ?string $comment The Comments on the Test
 * @property ?float $overall_score The Overall Score
 * @property ?bool $printon_report_card Print on Report Card?
 * @property ?bool $printon_transcript Print on Transcript?
 * @property ?\Blackbaud\SKY\School\Components\SubTest[] $sub_tests List of
 *   Subtests
 * @property ?string $test_date The Test Date
 * @property ?string $last_modified Last Modified Date
 * @property ?string $test_type The Test Type
 * @property ?int $test_type_id The Test Type Id
 * @property \Blackbaud\SKY\School\Components\UserBaseRead $user UserBaseRead
 *   Model
 *
 * @api
 */
class TestScore extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "comment" => "string",
        "overall_score" => "float",
        "printon_report_card" => "bool",
        "printon_transcript" => "bool",
        "sub_tests" => "\Blackbaud\SKY\School\Components\SubTest[]",
        "test_date" => "string",
        "last_modified" => "string",
        "test_type" => "string",
        "test_type_id" => "int",
        "user" => "\Blackbaud\SKY\School\Components\UserBaseRead",
    ];
}
