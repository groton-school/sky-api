<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Contains the audit information for a single field
 *
 * @property string | null $field_name Field changed
 * @property string | null $change_date Date of the change event
 * @property string | null $value_before Value before the change
 * @property string | null $value_after Value after the change
 * @property int | null $user_id Identifier of the user impacted by this
 *   change
 *
 * @api
 */
class UserAuditRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["field_name","change_date","value_before","value_after","user_id"];
}
