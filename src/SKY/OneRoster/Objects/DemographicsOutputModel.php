<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\ORDemographicModel[]
 *   | null $demographics 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class DemographicsOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["demographics","statusInfoSet"];
}
