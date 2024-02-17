<?php

namespace Blackbaud\SKY\School\Endpoints\v1\activities;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ActivitiesSectionCollection;

/**
 * @api
 */
class sections extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/activities/sections";

    /**
     * Returns a collection of activity sections for the specified school
     * level.
     *
     * Requires the following role in the Education Management system:
     *
     * - Activity Group Manager
     *
     * @param array{level_num: int, school_year?: string} $params An
     *   associative array - level_num: Format - int32. Level number -
     *   school_year: (Optional) The school year to get activity sections for.

     * Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Objects\ActivitiesSectionCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new ActivitiesSectionCollection($this->send("get", [], ["level_num" => $params["level_num"],
        "school_year" => $params["school_year"]]));
    }
}
