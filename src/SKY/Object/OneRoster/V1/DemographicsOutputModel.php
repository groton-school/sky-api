<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ORDemographicModel[]|null $demographics
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class DemographicsOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["demographics","statusInfoSet"];
}
