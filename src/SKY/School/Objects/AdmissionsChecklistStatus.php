<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Admissions Checklist Status
 *
 * @property int | null $status_id Identifier for this status
 * @property string | null $status_name Name of the status
 * @property int | null $ordinal Order of the status (lower items are earlier
 *   in the order)
 *
 * @api
 */
class AdmissionsChecklistStatus extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["status_id","status_name","ordinal"];
}
