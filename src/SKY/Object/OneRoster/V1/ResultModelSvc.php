<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Results model
 *
 * @property string|null $scoreStatus
 * @property string|null $scoreDate
 * @property double|null $score
 * @property string|null $comment
 * @property GuidRefModel $lineItem
 * @property GuidRefModel $student
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class ResultModelSvc extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["scoreStatus","scoreDate","score","comment","lineItem","student","sourcedId","status","dateLastModified","metadata"];
}
