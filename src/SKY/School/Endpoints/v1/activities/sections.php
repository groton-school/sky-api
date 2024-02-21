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
     * Requires the following role in the Education Management system:
     *
     * - Activity Group Manager
     *
     * @param int $level_num Format - int32. Level number
     * @param ?string $school_year (Optional) The school year to get activity
     *   sections for.
     * Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\ActivitiesSectionCollectionSuccess

     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(int $level_num, ?string $school_year = null): ActivitiesSectionCollection
    {
        assert($level_num !== null, new ArgumentException("Parameter `level_num` is required"));

        return new ActivitiesSectionCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year]));
    }
}
