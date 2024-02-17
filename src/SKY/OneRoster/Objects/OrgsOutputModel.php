<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Objects\OrgModel[] $orgs
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] $statusInfoSet
 *
 * @api
 */
class OrgsOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "orgs",
        "statusInfoSet",
    ];
}
