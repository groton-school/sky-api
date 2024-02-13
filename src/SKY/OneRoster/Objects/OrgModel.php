<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $name 
 * @property string | null $type 
 * @property string | null $identifier 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $parent 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] |
 *   null $children 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class OrgModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["name","type","identifier","parent","children","sourcedId","status","dateLastModified","metadata"];
}
