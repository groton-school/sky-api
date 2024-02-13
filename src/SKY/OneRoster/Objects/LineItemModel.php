<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $title 
 * @property string | null $description 
 * @property string | null $assignDate 
 * @property string | null $dueDate 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel $class
 *   
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $category 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $gradingPeriod 
 * @property double | null $resultValueMin 
 * @property double | null $resultValueMax 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class LineItemModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["title","description","assignDate","dueDate","class","category","gradingPeriod","resultValueMin","resultValueMax","sourcedId","status","dateLastModified","metadata"];
}
