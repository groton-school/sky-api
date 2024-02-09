<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Admissions Checklist
 *
 * @property int $checklist_id
 * @property string|null $name
 * @property bool $is_inactive
 * @property bool $is_locked
 * @property bool $is_sample
 * @api
 */
class AdmissionsCheckList extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["checklist_id","name","is_inactive","is_locked","is_sample"];
}
