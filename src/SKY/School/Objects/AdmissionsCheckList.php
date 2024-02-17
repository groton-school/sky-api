<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Admissions Checklist
 *
 * @property int $checklist_id Identifier for a given checklist
 * @property string $name Name of the checklist
 * @property bool $is_inactive Indicates if the checklist is active
 * @property bool $is_locked Indicates if the checklist is locked
 * @property bool $is_sample Indicates if the checklist is a sample
 *
 * @api
 */
class AdmissionsCheckList extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "checklist_id",
        "name",
        "is_inactive",
        "is_locked",
        "is_sample",
    ];
}
