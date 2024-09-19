<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Teachers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ClassOutputModel;

/**
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{teacher_id}/classes";

    /**
     * Returns a collection of classes for the specified ```teacher\_id```.
     *
     * @param array{teacher_id: string} $params An associative array
     *     - teacher_id: sourcedId for the teacher
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTeacherId(array $params): ClassOutputModel
    {
        assert(isset($params['teacher_id']), new ArgumentException("Parameter `teacher_id` is required"));

        return new ClassOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['teacher_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
