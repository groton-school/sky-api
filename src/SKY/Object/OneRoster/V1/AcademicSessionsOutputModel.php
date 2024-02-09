<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property AcademicSessionModel[]|null $academicSessions
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class AcademicSessionsOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["academicSessions","statusInfoSet"];
}
