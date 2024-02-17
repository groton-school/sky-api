<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Admissions Checklist
 *
 * @property int $id Identifier for a given status
 * @property string $description Name of the status
 * @property int $next_status_id Next Status Id
 *
 * @api
 */
class AdmissionsStatuses extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "description",
        "next_status_id",
    ];
}
