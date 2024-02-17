<?php

namespace Blackbaud\SKY\School\Endpoints\v1\testscores;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TestTypeCollection;

/**
 * @api
 */
class testtypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/testscores/testtypes";

    /**
     * Returns a collection of test and subtest types for a school.
     *
     * Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\TestTypeCollection
     *
     * @api
     */
    public function getAll()
    {
        return new TestTypeCollection($this->send("get", [], []));
    }
}
