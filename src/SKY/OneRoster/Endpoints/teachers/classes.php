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
     * Returns a collection of classes for the specified `teacher_id`.
     *
     * @param string $teacher_id sourcedId for the teacher
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTeacher(string $teacher_id): ClassOutputModel
    {
        assert($teacher_id !== null, new ArgumentException("Parameter `teacher_id` is required"));

        return new ClassOutputModel($this->send("get", ["{teacher_id}" => $teacher_id], []));
    }
}
