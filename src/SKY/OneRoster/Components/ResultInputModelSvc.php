<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Results input model
 *
 * @property \Blackbaud\SKY\OneRoster\Components\ResultModelSvc $result
 *   Results model
 *
 * @api
 */
class ResultInputModelSvc extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "result",
    ];
}
