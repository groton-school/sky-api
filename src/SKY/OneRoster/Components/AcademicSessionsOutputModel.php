<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?\Blackbaud\SKY\OneRoster\Components\AcademicSessionModel[]
 *   $academicSessions
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class AcademicSessionsOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "academicSessions",
        "statusInfoSet",
    ];
}
