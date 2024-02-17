<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Results input model
 *
 * @property \Blackbaud\SKY\OneRoster\Objects\ResultModelSvc $result Results
 *   model
 *
 * @api
 */
class ResultInputModelSvc extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "result",
    ];
}
