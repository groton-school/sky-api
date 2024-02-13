<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $ScheduleSetId 
 * @property string | null $RoleDescription 
 * @property int | null $RoleId 
 * @property string | null $PublishDate 
 * @property string | null $InsertDate 
 * @property string | null $LastModifyDate 
 * @property int | null $LastModifyUserId 
 * @property string[] | null $FieldsToNull 
 * @property string | null $vendor_external_id 
 *
 * @api
 */
class ScheduleSetAccess extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["ScheduleSetId","RoleDescription","RoleId","PublishDate","InsertDate","LastModifyDate","LastModifyUserId","FieldsToNull","vendor_external_id"];
}
