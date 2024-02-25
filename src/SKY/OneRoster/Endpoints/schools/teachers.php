<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;

/**
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/teachers";

    /**
     * Returns a collection of teacher user data for the specified
     * <code>school_id</code>. <br />
     *
     * Roles returned include:
     *
     * <ul><li>Teacher</li><li>Pending Teacher</li></ul>
     *
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySchool(array $params): UsersOutputModel
    {
        assert(isset($params['school_id']), new ArgumentException("Parameter `school_id` is required"));

        return new UsersOutputModel($this->send("get", ["{school_id}" => $params['school_id']], []));
    }
}
