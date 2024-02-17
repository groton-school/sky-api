<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SpecialDayCollection;

/**
 * @api
 */
class specialdays extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/specialdays";

    /**
     * Returns a collection of special days.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{level_id?: int} $params An associative array
     *     - level_id: (Optional) Format - int32. Identifier for a specific
     *   school level.
     *
     * @return \Blackbaud\SKY\School\Objects\SpecialDayCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new SpecialDayCollection($this->send("get", [], ["level_id" => $params["level_id"]]));
    }
}
