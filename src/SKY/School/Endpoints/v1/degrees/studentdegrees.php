<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Degrees;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserDegreeOutputModelCollection;

/**
 * @api
 */
class Studentdegrees extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/degrees/studentdegrees/{student_id}";

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
     * @param int $student_id Format - int32. user Id
     *
     * @return \Blackbaud\SKY\School\Components\UserDegreeOutputModelCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(int $student_id): UserDegreeOutputModelCollection
    {
        assert($student_id !== null, new ArgumentException("Parameter `student_id` is required"));

        return new UserDegreeOutputModelCollection($this->send("get", ["{student_id}" => $student_id], []));
    }
}
