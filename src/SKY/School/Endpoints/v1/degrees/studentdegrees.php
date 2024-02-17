<?php

namespace Blackbaud\SKY\School\Endpoints\v1\degrees;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserDegreeOutputModelCollection;

/**
 * @api
 */
class studentdegrees extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/degrees/studentdegrees/{student_id}";

    /**
     * Returns a collection of degree/diplomas assigned to the student.
     *
     * Each degree/diploma has a collection of majors, minors and/or
     * concentrations as appropriate for that degree or diploma.
     *
     * Requires the following role in the Education Management system:
     *
     * - Degree Manager
     *
     * - Diploma Manager
     *
     * - Student
     *
     * - Parent
     *
     * @param array{student_id: int} $params An associative array
     *     - student_id: Format - int32. user Id
     *
     * @return \Blackbaud\SKY\School\Objects\UserDegreeOutputModelCollection
     *
     * @api
     */
    public function get(array $params)
    {
        return new UserDegreeOutputModelCollection($this->send("get", ["{student_id}" => $params["student_id"]], []));
    }
}
