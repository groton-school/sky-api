<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $name
 * @property string|null $type
 * @property string|null $identifier
 * @property GuidRefModel $parent
 * @property GuidRefModel[]|null $children
 * @property string|null $sourcedId
 * @property string|null $status
 * @property string|null $dateLastModified
 * @property array<string, string>|null $metadata
 * @api
 */
class OrgModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["name","type","identifier","parent","children","sourcedId","status","dateLastModified","metadata"];
}
