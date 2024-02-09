<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* TestScores Model
*
* @property int|null $id
* @property string|null $comment
* @property double|null $overall_score
* @property bool|null $printon_report_card
* @property bool|null $printon_transcript
* @property SubTest[]|null $sub_tests
* @property string|null $test_date
@api
*/
class TestScoreAdd extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","comment","overall_score","printon_report_card","printon_transcript","sub_tests","test_date"];
}
