<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $title 
 * @property string | null $classCode 
 * @property string | null $classType 
 * @property string | null $location 
 * @property string[] | null $grades 
 * @property string[] | null $subjects 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $course 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $school 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $terms 
 * @property string[] | null $subjectCodes 
 * @property string[] | null $periods 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $resources 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class ClassModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["title","classCode","classType","location","grades","subjects","course","school","terms","subjectCodes","periods","resources","sourcedId","status","dateLastModified","metadata"];
}
