<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $title
 * @property string|null $startDate
 * @property string|null $endDate
 * @property string|null $type
 * @property GuidRefModel $parent
 * @property GuidRefModel[]|null $children
 * @property string|null $schoolYear
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class AcademicSessionModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["title","startDate","endDate","type","parent","children","schoolYear","sourcedId","status","dateLastModified","metadata"];
}
