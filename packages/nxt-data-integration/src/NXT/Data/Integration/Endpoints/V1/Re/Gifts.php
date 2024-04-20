<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts\Notes;

/**
 * Routing class for the subnamespace `Gifts`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts\Notes
 *   $notes
 *
 * @api
 */
class Gifts extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "notes" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts\Notes",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts\Notes
     *   $_notes
     */
    protected ?Notes $_notes = null;
}
