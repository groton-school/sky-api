<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ChildOfParentCollection;

/**
 * @api
 */
class Students extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{parent_id}/students";

    /**
     * Returns a collection of children of the specified ```parent_id```.<br
     * />
     *
     * Requires the logged in ```user_id``` matches the specified
     * ```parent_id```.
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Parent</li></ul>
     *
     * @param array{parent_id: int} $params An associative array
     *     - parent_id: Format - int32.
     *
     * @return \Blackbaud\SKY\School\Components\ChildOfParentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByParent(array $params): ChildOfParentCollection
    {
        assert(isset($params['parent_id']), new ArgumentException("Parameter `parent_id` is required"));

        return new ChildOfParentCollection($this->send("get", ["{parent_id}" => $params['parent_id']], []));
    }
}
