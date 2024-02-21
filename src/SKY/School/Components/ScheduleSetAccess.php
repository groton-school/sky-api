<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $ScheduleSetId
 * @property ?string $RoleDescription
 * @property ?int $RoleId
 * @property ?string $PublishDate
 * @property ?string $InsertDate
 * @property ?string $LastModifyDate
 * @property ?int $LastModifyUserId
 * @property ?string[] $FieldsToNull
 * @property ?string $vendor_external_id
 *
 * @api
 */
class ScheduleSetAccess extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "ScheduleSetId" => "int",
        "RoleDescription" => "string",
        "RoleId" => "int",
        "PublishDate" => "string",
        "InsertDate" => "string",
        "LastModifyDate" => "string",
        "LastModifyUserId" => "int",
        "FieldsToNull" => "string[]",
        "vendor_external_id" => "string",
    ];
}
