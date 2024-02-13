<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * TestScores Model
 *
 * @property int | null $id The Test Score Id
 * @property string | null $comment The Comments on the Test
 * @property double | null $overall_score The Overall Score
 * @property bool | null $printon_report_card Print on Report Card?
 * @property bool | null $printon_transcript Print on Transcript?
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\SubTest[] | null
 *   $sub_tests List of Subtests
 * @property string | null $test_date The Test Date
 * @property string | null $test_type The Test Type
 * @property int | null $test_type_id The Test Type Id
 *
 * @api
 */
class TestScore extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","comment","overall_score","printon_report_card","printon_transcript","sub_tests","test_date","test_type","test_type_id"];
}
