<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $user
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $class
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $school
 * @property string $role
 * @property bool $primary
 * @property string $beginDate
 * @property string $endDate
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property \string[] $metadata
 *
 * @api
 */
class EnrollmentModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user",
        "class",
        "school",
        "role",
        "primary",
        "beginDate",
        "endDate",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
