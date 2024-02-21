<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $title
 * @property ?string $startDate
 * @property ?string $endDate
 * @property ?string $type
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $parent
 * @property ?\Blackbaud\SKY\OneRoster\Components\GuidRefModel[] $children
 * @property ?string $schoolYear
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?\string[] $metadata
 *
 * @api
 */
class AcademicSessionModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "title",
        "startDate",
        "endDate",
        "type",
        "parent",
        "children",
        "schoolYear",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
