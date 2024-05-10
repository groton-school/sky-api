<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AllergiesAndConditionsView;

/**
 * @api
 */
class Allergiesconditions extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/allergiesconditions";

    /**
     * Returns a list of allergies/conditions for the specified
     * ```user\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. ID of the student
     *
     * @return \Blackbaud\SKY\School\Components\AllergiesAndConditionsView[]
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): array
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return array_map(fn($a) => new AllergiesAndConditionsView($a), $this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
