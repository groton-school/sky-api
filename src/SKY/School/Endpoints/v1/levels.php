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
     * Returns a collection of core school levels.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\LevelCollection Success
     */
    public function getAll(): LevelCollection
    {
        return new LevelCollection($this->send("get", [], []));
    }
}
