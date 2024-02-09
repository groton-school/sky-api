<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property AcademicSessionModel $academicSession
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class AcademicSessionOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["academicSession","statusInfoSet"];
}
