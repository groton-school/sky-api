<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ListReadCollection;
use Blackbaud\SKY\School\Endpoints\V1\Lists\Advanced;

/**
 * Routing class for the subnamespace `Lists`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Lists\Advanced $advanced
 *
 * @api
 */
class Lists extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/lists";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "advanced" => "\Blackbaud\SKY\School\Endpoints\V1\Lists\Advanced",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Lists\Advanced $_advanced
     */
    protected Advanced $_advanced = null;

    /**
     * Returns a list of basic or advanced lists the authorized user has
     * access to<br />
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Page Manager</li><li>Content
     * Editor</li><li>Teacher</li><li>Coach</li><li>Community Group
     * Manager</li><li>Mentor Manager</li><li>Alumni Group
     * Manager</li><li>Athletic Group Manager</li><li>Academic Group
     * Manager</li><li>System Group Manager</li><li>Content
     * Manager</li><li>Community Group Owner</li><li>Dorm Group
     * Manager</li><li>Activity Group Manager</li><li>Advisory Group
     * Manager</li><li>Advisor</li><li>Dorm Supervisor</li><li>Activity
     * Leader</li><li>Pending Teacher</li><li>Pending Advisor</li><li>Pending
     * Dorm Supervisor</li><li>Pending Activity Leader</li><li>Platform
     * Manager</li><li>SkyApi Data Sync</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\ListReadCollection Success
     */
    public function getAll(): ListReadCollection
    {
        return new ListReadCollection($this->send("get", [], []));
    }
}
