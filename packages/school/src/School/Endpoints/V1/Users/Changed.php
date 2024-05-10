<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserExtendedCollection;

/**
 * @api
 */
class Changed extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/changed";

    /**
     * Returns a paginated collection of users that have been created or
     * modified within the specified timeframe. The timeframe is from the
     * start\_date to the start\_date plus seven days.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{base_role_ids: string, start_date: string} $params An
     *   associative array
     *     - base_role_ids: Comma delimited list of base role IDs to get users
     *   for.
     *     - start_date: Format - date-time (as date-time in RFC3339). The
     *   date to begin looking for changes. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2003-04-21.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtendedCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserExtendedCollection
    {
        assert(isset($params['base_role_ids']), new ArgumentException("Parameter `base_role_ids` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));

        return new UserExtendedCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['base_role_ids','start_date']), ARRAY_FILTER_USE_KEY)));
    }
}
