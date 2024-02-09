<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Admissions Checklist Status
 *
 * @property int|null $status_id
 * @property string|null $status_name
 * @property int|null $ordinal
 * @api
 */
class AdmissionsChecklistStatus extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["status_id","status_name","ordinal"];
}
