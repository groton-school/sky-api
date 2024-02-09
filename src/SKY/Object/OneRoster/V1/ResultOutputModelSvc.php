<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Result
 *
 * @property ResultModelSvc $result Results model
 * @property StatusInfoModel[]|null $status_info_set
 * @api
 */
class ResultOutputModelSvc extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["result","status_info_set"];
}
