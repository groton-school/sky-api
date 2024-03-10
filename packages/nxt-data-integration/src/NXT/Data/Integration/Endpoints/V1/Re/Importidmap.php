<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Constituent;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Gift;

/**
 * Routing class for the subnamespace `Importidmap`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Constituent
 *   $constituent
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Gift
 *   $gift
 *
 * @api
 */
class Importidmap extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "constituent" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Constituent",
        "gift" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Gift",
    ];

    /**
     * @var \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Constituent
     *   $_constituent
     */
    protected Constituent $_constituent = null;

    /**
     * @var \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap\Gift
     *   $_gift
     */
    protected Gift $_gift = null;
}
