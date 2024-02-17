<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ListReadCollection;

/**
 * @api
 */
class lists extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/lists";

    /**
     * Returns a list of basic or advanced lists the authorized user has
     * access to
     *
     * Requires the following role in the Education Management system:
     *
     * - Page Manager
     *
     * - Content Editor
     *
     * - Teacher
     *
     * - Coach
     *
     * - Community Group Manager
     *
     * - Mentor Manager
     *
     * - Alumni Group Manager
     *
     * - Athletic Group Manager
     *
     * - Academic Group Manager
     *
     * - System Group Manager
     *
     * - Content Manager
     *
     * - Community Group Owner
     *
     * - Dorm Group Manager
     *
     * - Activity Group Manager
     *
     * - Advisory Group Manager
     *
     * - Advisor
     *
     * - Dorm Supervisor
     *
     * - Activity Leader
     *
     * - Pending Teacher
     *
     * - Pending Advisor
     *
     * - Pending Dorm Supervisor
     *
     * - Pending Activity Leader
     *
     * - Platform Manager
     *
     * - SkyApi Data Sync
     *
     * @return \Blackbaud\SKY\School\Objects\ListReadCollection
     *
     * @api
     */
    public function getAll()
    {
        return new ListReadCollection($this->send("get", [], []));
    }
}
