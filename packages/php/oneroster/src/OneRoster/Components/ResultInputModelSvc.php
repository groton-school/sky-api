<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Results input model
 *
 * @property \Blackbaud\SKY\OneRoster\Components\ResultModelSvc $result
 *   Results model
 *
 * @api
 */
class ResultInputModelSvc extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "result" => "\Blackbaud\SKY\OneRoster\Components\ResultModelSvc",
    ];
}
