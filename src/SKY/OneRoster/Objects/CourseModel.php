<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $title 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $schoolYear 
 * @property string | null $courseCode 
 * @property string[] | null $grades 
 * @property string[] | null $subjects 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel $org 
 * @property string[] | null $subjectCodes 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $resources 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class CourseModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["title","schoolYear","courseCode","grades","subjects","org","subjectCodes","resources","sourcedId","status","dateLastModified","metadata"];
}
