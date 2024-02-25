<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentImmunizationRead;

/**
 * @api
 */
class Immunizations extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/immunizations";

    /**
     * Returns a collection of medical immunizations for the specified
     * ```user_id```. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Nurse</li></ul>
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int, include_: string} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the student
     *     - include_: Show all required immunizations or just those completed
     *   or missing. Allowed values: all, completed, missing.
     *
     * @return \Blackbaud\SKY\School\Components\StudentImmunizationRead[]
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUser(array $params): array
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['include_']), new ArgumentException("Parameter `include_` is required"));

        return array_map(fn($a) => new StudentImmunizationRead($a), $this->send("get", ["{user_id}" => $params['user_id']], ["include_" => $include_]));
    }
}
