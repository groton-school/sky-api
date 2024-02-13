<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Result
 *
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\ResultModelSvc[] |
 *   null $results Results
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $status_info_set List of status messages
 *
 * @api
 */
class ResultsOutputModelSvc extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["results","status_info_set"];
}
