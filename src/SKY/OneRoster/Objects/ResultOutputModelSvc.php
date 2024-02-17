<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Result
 *
 * @property \Blackbaud\SKY\OneRoster\Objects\ResultModelSvc $result Results
 *   model
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[]
 *   $status_info_set List of status messages
 *
 * @api
 */
class ResultOutputModelSvc extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "result",
        "status_info_set",
    ];
}
