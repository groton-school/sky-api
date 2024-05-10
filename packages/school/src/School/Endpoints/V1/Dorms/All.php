<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Dorms;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\DormCollection;

/**
 * @api
 */
class All extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/dorms/all";

    /**
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Dorm Group Manager
     *
     * - Dorm Supervisor
     *
     * - Pending Dorm Supervisor
     *
     * @param array{level_number: int, school_year: string} $params An
     *   associative array
     *     - level_number: Format - int32. Identifier for the school level
     *     - school_year: Identifier for the school year
     *
     * @return \Blackbaud\SKY\School\Components\DormCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): DormCollection
    {
        assert(isset($params['level_number']), new ArgumentException("Parameter `level_number` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new DormCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['level_number','school_year']), ARRAY_FILTER_USE_KEY)));
    }
}
