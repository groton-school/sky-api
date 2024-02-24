<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Testscores;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TestTypeCollection;

/**
 * @api
 */
class Testtypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/testscores/testtypes";

    /**
     * Returns a collection of test and subtest types for a school.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\TestTypeCollection Success
     */
    public function getAll(): TestTypeCollection
    {
        return new TestTypeCollection($this->send("get", [], []));
    }
}
