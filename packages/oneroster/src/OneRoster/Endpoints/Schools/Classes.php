<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ClassOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments;

/**
 * Routing class for the subnamespace `Classes`
 *
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments
 *   $enrollments
 *
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "enrollments" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments",
    ];

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * Returns a collection of classes for the specified `school_id`.
     *
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySchoolId(array $params): ClassOutputModel
    {
        assert(isset($params['school_id']), new ArgumentException("Parameter `school_id` is required"));

        return new ClassOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['school_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
