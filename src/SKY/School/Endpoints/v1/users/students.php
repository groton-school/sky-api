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
     * @var string $url
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
     * @param int $parent_id Format - int32.
     *
     * @return \Blackbaud\SKY\School\Components\ChildOfParentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByParent(int $parent_id): ChildOfParentCollection
    {
        assert($parent_id !== null, new ArgumentException("Parameter `parent_id` is required"));

        return new ChildOfParentCollection($this->send("get", ["{parent_id}" => $parent_id], []));
    }
}
