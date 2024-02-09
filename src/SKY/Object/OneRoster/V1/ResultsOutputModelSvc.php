<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Result
 *
 * @property ResultModelSvc[]|null $results
 * @property StatusInfoModel[]|null $status_info_set
 * @api
 */
class ResultsOutputModelSvc extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["results","status_info_set"];
}
