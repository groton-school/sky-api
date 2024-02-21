<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?\Blackbaud\SKY\OneRoster\Components\OrgModel[] $orgs
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class OrgsOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "orgs" => "\Blackbaud\SKY\OneRoster\Components\OrgModel[]",
        "statusInfoSet" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
