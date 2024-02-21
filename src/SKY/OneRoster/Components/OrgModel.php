<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $name
 * @property string $type
 * @property string $identifier
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $parent
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $children
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property \string[] $metadata
 *
 * @api
 */
class OrgModel extends BaseObject
{
    /**
     * @var \string[] $fields
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
