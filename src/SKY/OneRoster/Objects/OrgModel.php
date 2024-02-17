<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $name
 * @property string $type
 * @property string $identifier
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $parent
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel[] $children
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property string[] $metadata
 *
 * @api
 */
class OrgModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "name",
        "type",
        "identifier",
        "parent",
        "children",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
