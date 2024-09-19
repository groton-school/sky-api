<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields\List_;

/**
 * Routing class for the subnamespace `Customfields`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields\List_
 *   $list_
 *
 * @api
 */
class Customfields extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "list_" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields\List_",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields\List_
     *   $_list_
     */
    protected ?List_ $_list_ = null;
}
