<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\ORDemographicModel
 *   $demographic 
 *
 * @api
 */
class DemographicOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["demographic"];
}
