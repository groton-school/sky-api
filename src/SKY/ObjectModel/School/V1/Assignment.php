<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Assignment Model
*
* @property int $id
* @property string|null $date
* @property string|null $description
* @property bool $discussion
* @property string|null $due_date
* @property int|null $enrolled
* @property int|null $graded_count
* @property int|null $index_id
* @property bool $major
* @property string|null $name
* @property bool $publish_on_assigned
* @property bool $published
* @property int|null $rank
* @property int|null $status
* @property string|null $type
* @property int|null $type_id
@api
*/
class Assignment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","date","description","discussion","due_date","enrolled","graded_count","index_id","major","name","publish_on_assigned","published","rank","status","type","type_id"];
}
