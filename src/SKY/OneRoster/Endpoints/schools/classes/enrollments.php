<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel;

/**
 * @api
 */
class Enrollments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes/{class_id}/enrollments";

    /**
     * Returns a collection of enrollments for the specified
     * <code>class_id</code> in the <code>school_id</code>.
     *
     * @param array{school_id: string, class_id: string} $params An
     *   associative array
     *     - school_id: sourcedId for the school
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel OK -
     *   It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySchoolAndClass(array $params): EnrollmentsOutputModel
    {
        assert(isset($params['school_id']), new ArgumentException("Parameter `school_id` is required"));
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));

        return new EnrollmentsOutputModel($this->send("get", ["{school_id}" => $params['school_id'],
        "{class_id}" => $params['class_id']], []));
    }
}
