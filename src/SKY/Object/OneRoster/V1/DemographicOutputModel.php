<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property ORDemographicModel $demographic
 * @api
 */
class DemographicOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["demographic"];
}
