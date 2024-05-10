<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Activities;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ActivitiesSectionCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/activities/sections";

    /**
     * Returns a collection of activity sections for the specified school
     * level.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Activity Group Manager
     *
     * @param array{level_num: int, school_year: string} $params An
     *   associative array
     *     - level_num: Format - int32. Level number
     *     - school_year: The school year to get activity sections for.
     * Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\ActivitiesSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ActivitiesSectionCollection
    {
        assert(isset($params['level_num']), new ArgumentException("Parameter `level_num` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new ActivitiesSectionCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['level_num','school_year']), ARRAY_FILTER_USE_KEY)));
    }
}
