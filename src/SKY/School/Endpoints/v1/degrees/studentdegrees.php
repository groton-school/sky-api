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
     * Returns a collection of degree/diplomas assigned to the
     * student.<br></br>
     *
     * Each degree/diploma has a collection of majors, minors and/or
     * concentrations as appropriate for that degree or diploma.<br></br>
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Degree Manager</li><li>Diploma
     * Manager</li><li>Student</li><li>Parent</li></ul>
     *
     * @param array{student_id: int} $params An associative array
     *     - student_id: Format - int32. user Id
     *
     * @return \Blackbaud\SKY\School\Components\UserDegreeOutputModelCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(array $params): UserDegreeOutputModelCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));

        return new UserDegreeOutputModelCollection($this->send("get", ["{student_id}" => $params['student_id']], []));
    }
}
