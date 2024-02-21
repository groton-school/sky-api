<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Admissions Checklist Status
 *
 * @property int $status_id Identifier for this status
 * @property string $status_name Name of the status
 * @property int $ordinal Order of the status (lower items are earlier in the
 *   order)
 *
 * @api
 */
class AdmissionsChecklistStatus extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "status_id",
        "status_name",
        "ordinal",
    ];
}
