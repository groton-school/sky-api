<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Contains the audit information for a single field
 *
 * @property ?string $field_name Field changed
 * @property ?string $change_date Date of the change event
 * @property ?string $value_before Value before the change
 * @property ?string $value_after Value after the change
 * @property ?int $user_id Identifier of the user impacted by this change
 *
 * @api
 */
class UserAuditRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "field_name",
        "change_date",
        "value_before",
        "value_after",
        "user_id",
    ];
}
