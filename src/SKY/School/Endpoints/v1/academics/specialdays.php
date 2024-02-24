<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SpecialDayCollection;

/**
 * @api
 */
class Specialdays extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/specialdays";

    /**
     * Returns a collection of special days.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param ?int $level_id Format - int32. Identifier for a specific school
     *   level.
     *
     * @return \Blackbaud\SKY\School\Components\SpecialDayCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?int $level_id): SpecialDayCollection
    {
        assert($level_id !== null, new ArgumentException("Parameter `level_id` is required"));

        return new SpecialDayCollection($this->send("get", [], ["level_id" => $level_id]));
    }
}
