<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Result
 *
 * @property ?\Blackbaud\SKY\OneRoster\Components\ResultModelSvc[] $results
 *   Results
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $status_info_set List of status messages
 *
 * @api
 */
class ResultsOutputModelSvc extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "results",
        "status_info_set",
    ];
}
