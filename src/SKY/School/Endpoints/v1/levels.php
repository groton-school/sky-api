<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\LevelCollection;

/**
 * @api
 */
class levels extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/levels";

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
     * @return \Blackbaud\SKY\School\Objects\LevelCollection
     *
     * @api
     */
    public function getAll()
    {
        return new LevelCollection($this->send("get", [], []));
    }
}
