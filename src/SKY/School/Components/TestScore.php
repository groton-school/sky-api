<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
 * @property ?string $test_type The Test Type
 * @property ?int $test_type_id The Test Type Id
 *
 * @api
 */
class TestScore extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "comment",
        "overall_score",
        "printon_report_card",
        "printon_transcript",
        "sub_tests",
        "test_date",
        "test_type",
        "test_type_id",
    ];
}
