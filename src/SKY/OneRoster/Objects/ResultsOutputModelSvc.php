<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Result
 *
 * @property \Blackbaud\SKY\OneRoster\Objects\ResultModelSvc[] $results
 *   Results
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[]
 *   $status_info_set List of status messages
 *
 * @api
 */
class ResultsOutputModelSvc extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "results",
        "status_info_set",
    ];
}
