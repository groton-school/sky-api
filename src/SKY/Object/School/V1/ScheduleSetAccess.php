<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $ScheduleSetId
 * @property string|null $RoleDescription
 * @property int|null $RoleId
 * @property string|null $PublishDate
 * @property string|null $InsertDate
 * @property string|null $LastModifyDate
 * @property int|null $LastModifyUserId
 * @property _string|null $FieldsToNull
 * @property string|null $vendor_external_id
 * @api
 */
class ScheduleSetAccess extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["ScheduleSetId","RoleDescription","RoleId","PublishDate","InsertDate","LastModifyDate","LastModifyUserId","FieldsToNull","vendor_external_id"];
}
