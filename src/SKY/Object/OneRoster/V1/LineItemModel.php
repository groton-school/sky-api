<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $title
 * @property string|null $description
 * @property string|null $assignDate
 * @property string|null $dueDate
 * @property GuidRefModel $class
 * @property GuidRefModel $category
 * @property GuidRefModel $gradingPeriod
 * @property double|null $resultValueMin
 * @property double|null $resultValueMax
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class LineItemModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["title","description","assignDate","dueDate","class","category","gradingPeriod","resultValueMin","resultValueMax","sourcedId","status","dateLastModified","metadata"];
}
