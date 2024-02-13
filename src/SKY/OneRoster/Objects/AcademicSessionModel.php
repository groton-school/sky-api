<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $title 
 * @property string | null $startDate 
 * @property string | null $endDate 
 * @property string | null $type 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $parent 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $children 
 * @property string | null $schoolYear 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class AcademicSessionModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["title","startDate","endDate","type","parent","children","schoolYear","sourcedId","status","dateLastModified","metadata"];
}
