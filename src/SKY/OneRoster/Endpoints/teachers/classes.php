<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\teachers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\ClassOutputModel;

/**
 * @api
 */
class classes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{teacher_id}/classes";

    /**
     * Returns a collection of classes for the specified `teacher_id`.
     *
     * @param array{teacher_id: string} $params An associative array
     *     - teacher_id: sourcedId for the teacher
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ClassOutputModel
     *
     * @api
     */
    public function getByTeacher(array $params)
    {
        return new ClassOutputModel($this->send("get", ["{teacher_id}" => $params["teacher_id"]], []));
    }
}
