<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $ScheduleSetId
 * @property ?string $RoleDescription
 * @property ?int $RoleId
 * @property ?string $PublishDate
 * @property ?string $InsertDate
 * @property ?string $LastModifyDate
 * @property ?int $LastModifyUserId
 * @property ?\string[] $FieldsToNull
 * @property ?string $vendor_external_id
 *
 * @api
 */
class ScheduleSetAccess extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "ScheduleSetId",
        "RoleDescription",
        "RoleId",
        "PublishDate",
        "InsertDate",
        "LastModifyDate",
        "LastModifyUserId",
        "FieldsToNull",
        "vendor_external_id",
    ];
}
