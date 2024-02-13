<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\OrgModel[] | null
 *   $orgs 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class OrgsOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["orgs","statusInfoSet"];
}
