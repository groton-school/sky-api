<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EnrollmentCollection;

/**
 * @api
 */
class enrollments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/enrollments/{user_id}";

    /**
     * Returns a collection of course sections in which the provided student
     * is enrolled.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{user_id: int, school_year?: string} $params An associative
     *   array - user_id: Format - int32. User identifier. - school_year:
     *   (Optional) The school year to filter the collection of sections by.
     *   Corresponds to ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Objects\EnrollmentCollection
     *
     * @api
     */
    public function get(array $params)
    {
        return new EnrollmentCollection($this->send("get", ["{user_id}" => $params["user_id"]], ["school_year" => $params["school_year"]]));
    }
}
