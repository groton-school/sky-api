<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Result
 *
 * @property \Blackbaud\SKY\OneRoster\Components\ResultModelSvc $result
 *   Results model
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $status_info_set List of status messages
 *
 * @api
 */
class ResultOutputModelSvc extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "result" => "\Blackbaud\SKY\OneRoster\Components\ResultModelSvc",
        "status_info_set" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
