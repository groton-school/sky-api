<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\AcademicSessionModel
 *   $academicSession
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class AcademicSessionOutputModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "academicSession",
        "statusInfoSet",
    ];
}
