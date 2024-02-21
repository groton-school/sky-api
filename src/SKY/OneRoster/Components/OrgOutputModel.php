<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\OrgModel $org
 * @property \Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class OrgOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "org",
        "statusInfoSet",
    ];
}
