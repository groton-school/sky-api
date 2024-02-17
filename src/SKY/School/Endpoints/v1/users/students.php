<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ChildOfParentCollection;

/**
 * @api
 */
class students extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{parent_id}/students";

    /**
     * Returns a collection of children of the specified ```parent_id```.
     *
     * Requires the logged in ```user_id``` matches the specified
     * ```parent_id```. Requires the following role in the Education
     * Management system:
     *
     * - Parent
     *
     * @param array{parent_id: int} $params An associative array
     *     - parent_id: Format - int32.
     *
     * @return \Blackbaud\SKY\School\Objects\ChildOfParentCollection
     *
     * @api
     */
    public function getByParent(array $params)
    {
        return new ChildOfParentCollection($this->send("get", ["{parent_id}" => $params["parent_id"]], []));
    }
}
