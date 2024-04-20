<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\EnrollmentOutputModel;
use Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel;

/**
 * @api
 */
class Enrollments extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/enrollments/{id}";

    /**
     * Returns a collection of enrollments.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel OK -
     *   It was possible to read the collection.
     */
    public function get(): EnrollmentsOutputModel
    {
        return new EnrollmentsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific enrollment.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the enrollment
     *
     * @return \Blackbaud\SKY\OneRoster\Components\EnrollmentOutputModel OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): EnrollmentOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new EnrollmentOutputModel($this->send("get", ["{id}" => $params['id']], []));
    }
}
