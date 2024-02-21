<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\LevelCollection;

/**
 * @api
 */
class Levels extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/levels";

    /**
     * Returns a collection of core school levels.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\LevelCollection Success
     *
     * @api
     */
    public function getAll(): LevelCollection
    {
        return new LevelCollection($this->send("get", [], []));
    }
}
